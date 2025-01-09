<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS' $Status
 * @property string $StatusMessage
 * @property 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR' $StatusMessageCode
 * @property DatasetStats $DatasetStats
 */
class DatasetDescription extends Shape
{
    /**
     * @param array{
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS',
     *     StatusMessage?: string,
     *     StatusMessageCode?: 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR',
     *     DatasetStats?: DatasetStats
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
