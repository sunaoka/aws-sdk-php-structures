<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $StartRecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $StartRecordType
 * @property string|null $StartRecordIdentifier
 * @property string|null $MaxItems
 */
class ListResourceRecordSetsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     StartRecordName?: string|null,
     *     StartRecordType?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null,
     *     StartRecordIdentifier?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
