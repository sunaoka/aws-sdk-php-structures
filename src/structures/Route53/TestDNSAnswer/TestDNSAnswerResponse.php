<?php

namespace Sunaoka\Aws\Structures\Route53\TestDNSAnswer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Nameserver
 * @property string $RecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $RecordType
 * @property list<string> $RecordData
 * @property string $ResponseCode
 * @property string $Protocol
 */
class TestDNSAnswerResponse extends Response
{
}
