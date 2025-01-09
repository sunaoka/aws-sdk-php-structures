<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateRealtimeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeakRequestsPerSecond
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $EndpointUrl
 * @property 'NONE'|'READY'|'UPDATING'|'FAILED' $EndpointStatus
 */
class RealtimeEndpointInfo extends Shape
{
    /**
     * @param array{
     *     PeakRequestsPerSecond?: int,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     EndpointUrl?: string,
     *     EndpointStatus?: 'NONE'|'READY'|'UPDATING'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
