<?php

namespace Sunaoka\Aws\Structures\Route53\ListHostedZoneChangeBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string|null $SubmittedAfter
 * @property string|null $SubmittedBefore
 * @property string|null $StartAfterChangeId
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListHostedZoneChangeBatchesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     SubmittedAfter?: string|null,
     *     SubmittedBefore?: string|null,
     *     StartAfterChangeId?: string|null,
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
