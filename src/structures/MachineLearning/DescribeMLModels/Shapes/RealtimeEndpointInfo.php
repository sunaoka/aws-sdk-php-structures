<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeMLModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PeakRequestsPerSecond
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $EndpointUrl
 * @property 'NONE'|'READY'|'UPDATING'|'FAILED'|null $EndpointStatus
 */
class RealtimeEndpointInfo extends Shape
{
    /**
     * @param array{
     *     PeakRequestsPerSecond?: int|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     EndpointUrl?: string|null,
     *     EndpointStatus?: 'NONE'|'READY'|'UPDATING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
