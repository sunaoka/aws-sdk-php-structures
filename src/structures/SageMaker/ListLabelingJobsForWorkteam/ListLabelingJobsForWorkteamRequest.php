<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property string|null $JobReferenceCodeContains
 * @property 'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListLabelingJobsForWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     JobReferenceCodeContains?: string|null,
     *     SortBy?: 'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
