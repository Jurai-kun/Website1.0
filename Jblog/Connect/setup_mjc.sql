set echo on
connect system/oracle

--Create PHP Application User
drop user Siojo cascade;
create user Siojo identified by admin;
	grant connect, resource to Siojo;
		alter user Siojo default tablespace users
		temporary tablespace temp account unlock;

--Create user security information about the app
drop user Jadmin cascade;
create user Jadmin identified by admin;
	alter user Jadmin default tablespace system
	temporary tablespace temp account unlock;
	grant create procedure, create session, create table, resource, select any dictionary to Jadmin;

--"Accounts_Clients" table for the application demo

 connect Siojo/admin

create table Stories
	(accountnum number(10) primary key,
		firstname varchar2(50) not null,
		lastname varchar2(50) not null,
		middlename varchar2(2),
		username varchar2(100) unique,
		password varchar2(50) not null,
	);

	connect Jadmin/admin;

	--Authentication with the web user username & passwords
	--A real application would never store plain-text passwords
	--but this code is a demo for client identifiers and not about
	--authentication.

	create table php_authentication
		(app_username varchar2(100) not null,
		app_password varchar2(50) not null);

	insert into php_authentication values('Siojo','admin1234');
	commit;

	grant select on php_authentication to Siojo;
