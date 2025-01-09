<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED' $Status
 * @property string $StatusMessage
 * @property DatasetImageStats $ImageStats
 */
class DatasetDescription extends Shape
{
    /**
     * @param array{
     *     ProjectName?: string,
     *     DatasetType?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED',
     *     StatusMessage?: string,
     *     ImageStats?: DatasetImageStats
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
