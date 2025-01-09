<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property int<1, 100> $MaxResults
 * @property string $NameContains
 * @property string $NextToken
 * @property 'CREATION_TIME'|'NAME' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $TrainingPlanArn
 */
class ListClustersRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 100>,
     *     NameContains?: string,
     *     NextToken?: string,
     *     SortBy?: 'CREATION_TIME'|'NAME',
     *     SortOrder?: 'Ascending'|'Descending',
     *     TrainingPlanArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
