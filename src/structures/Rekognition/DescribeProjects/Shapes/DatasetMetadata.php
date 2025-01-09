<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property 'TRAIN'|'TEST' $DatasetType
 * @property string $DatasetArn
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS' $Status
 * @property string $StatusMessage
 * @property 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR' $StatusMessageCode
 */
class DatasetMetadata extends Shape
{
    /**
     * @param array{
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     DatasetType?: 'TRAIN'|'TEST',
     *     DatasetArn?: string,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS',
     *     StatusMessage?: string,
     *     StatusMessageCode?: 'SUCCESS'|'SERVICE_ERROR'|'CLIENT_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
