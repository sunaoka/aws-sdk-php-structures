<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 30000> $DestinationIngestPort
 * @property int<10, 10000> $RecoveryLatencyMilliseconds
 */
class RistStandardSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationIngestPort: int<3000, 30000>,
     *     RecoveryLatencyMilliseconds: int<10, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
