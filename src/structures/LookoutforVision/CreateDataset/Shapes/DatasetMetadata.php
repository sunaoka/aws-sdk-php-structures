<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetType
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED' $Status
 * @property string $StatusMessage
 */
class DatasetMetadata extends Shape
{
    /**
     * @param array{
     *     DatasetType?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED_ROLLBACK_IN_PROGRESS'|'UPDATE_FAILED_ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
