<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobStatusDetails
 * @property \Aws\Api\DateTimeResult $LastCollectedTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property 'SUCCESS'|'USER_ERROR'|'SYSTEM_ERROR' $RecorderStatus
 */
class LastRecorderStatus extends Shape
{
    /**
     * @param array{
     *     JobStatusDetails?: string,
     *     LastCollectedTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     RecorderStatus?: 'SUCCESS'|'USER_ERROR'|'SYSTEM_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
