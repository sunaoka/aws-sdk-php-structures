<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $StartRecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS' $StartRecordType
 * @property string $StartRecordIdentifier
 * @property string $MaxItems
 */
class ListResourceRecordSetsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     StartRecordName?: string,
     *     StartRecordType?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS',
     *     StartRecordIdentifier?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
