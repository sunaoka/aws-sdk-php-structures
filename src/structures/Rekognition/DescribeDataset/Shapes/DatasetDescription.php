<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|null $Status
 * @property string|null $StatusMessage
 * @property 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR'|null $StatusMessageCode
 * @property DatasetStats|null $DatasetStats
 */
class DatasetDescription extends Shape
{
    /**
     * @param array{
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|null,
     *     StatusMessage?: string|null,
     *     StatusMessageCode?: 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR'|null,
     *     DatasetStats?: DatasetStats|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
