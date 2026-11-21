<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSetChanges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $RecordName
 * @property 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null $RecordType
 * @property string|null $SubmittedAfter
 * @property string|null $SubmittedBefore
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceRecordSetChangesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     RecordName?: string|null,
     *     RecordType?: 'SOA'|'A'|'TXT'|'NS'|'CNAME'|'MX'|'NAPTR'|'PTR'|'SRV'|'SPF'|'AAAA'|'CAA'|'DS'|'TLSA'|'SSHFP'|'SVCB'|'HTTPS'|null,
     *     SubmittedAfter?: string|null,
     *     SubmittedBefore?: string|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
