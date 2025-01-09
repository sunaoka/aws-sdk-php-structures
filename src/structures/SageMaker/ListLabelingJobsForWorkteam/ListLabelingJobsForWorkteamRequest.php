<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property string $JobReferenceCodeContains
 * @property 'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListLabelingJobsForWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     JobReferenceCodeContains?: string,
     *     SortBy?: 'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
