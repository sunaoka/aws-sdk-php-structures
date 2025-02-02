<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobStatusDetails
 * @property \Aws\Api\DateTimeResult|null $LastCollectedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property 'SUCCESS'|'USER_ERROR'|'SYSTEM_ERROR'|null $RecorderStatus
 */
class LastRecorderStatus extends Shape
{
    /**
     * @param array{
     *     JobStatusDetails?: string|null,
     *     LastCollectedTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     RecorderStatus?: 'SUCCESS'|'USER_ERROR'|'SYSTEM_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
