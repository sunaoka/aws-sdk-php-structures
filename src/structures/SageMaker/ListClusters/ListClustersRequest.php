<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NameContains
 * @property string|null $NextToken
 * @property 'CREATION_TIME'|'NAME'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $TrainingPlanArn
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NameContains?: string|null,
     *     NextToken?: string|null,
     *     SortBy?: 'CREATION_TIME'|'NAME'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     TrainingPlanArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
