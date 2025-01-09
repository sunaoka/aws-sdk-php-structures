<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ResourceRecordSet> $ResourceRecordSets
 * @property bool $IsTruncated
 * @property string $NextRecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $NextRecordType
 * @property string $NextRecordIdentifier
 * @property string $MaxItems
 */
class ListResourceRecordSetsResponse extends Response
{
}
