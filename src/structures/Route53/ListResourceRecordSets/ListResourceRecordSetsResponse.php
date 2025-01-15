<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ResourceRecordSet> $ResourceRecordSets
 * @property bool $IsTruncated
 * @property string|null $NextRecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $NextRecordType
 * @property string|null $NextRecordIdentifier
 * @property string $MaxItems
 */
class ListResourceRecordSetsResponse extends Response
{
}
