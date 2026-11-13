<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetProtections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $StartRecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $StartRecordType
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceRecordSetProtectionsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     StartRecordName?: string|null,
     *     StartRecordType?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
