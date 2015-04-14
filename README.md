#RTPHPLib v2

[![Build Status](https://travis-ci.org/dersam/RTPHPLib.svg?branch=2.0.0)](https://travis-ci.org/dersam/RTPHPLib.svg?branch=2.0.0)

Provides an implementation of the Request Tracker API in PHP.

##Requirements
The curl php extension is required.

##Versioning
As of 2.0.0, RTPHPLib will follow semantic versioning.

##Installation
Available as a composer package at http://packagist.org/packages/dersam/rt-php-lib.

Or, just download RequestTracker.php and require it in.

##Usage
See example.php for usage instructions.

If a function does not need to return any data, it will return true on success and false
on failure; otherwise, it will return an array of the parsed response data. 
*This is new behavior in v2, so if you are upgrading from v1, you will
need to update your code!*

If you ever need to see the content of a failed response, call $client->getLastError(). 
This will contain the original parsed response array.

See http://requesttracker.wikia.com/wiki/REST for information on available fields. 
Note that if a request type has mandatory fields, they are requested in the function
call, or (in certain cases) automatically added to the request.  So you don't need
to specify the ticket id in content, or the type of action.

##Issues
Please report any issues at https://github.com/dersam/RTPHPLib/issues.