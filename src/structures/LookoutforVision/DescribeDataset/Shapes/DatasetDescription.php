<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectName
 * @property string|null $DatasetType
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property DatasetImageStats|null $ImageStats
 */
class DatasetDescription extends Shape
{
    /**
     * @param array{
     *     ProjectName?: string|null,
     *     DatasetType?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null,
     *     StatusMessage?: string|null,
     *     ImageStats?: DatasetImageStats|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
