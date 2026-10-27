<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<1024, 65531> $DestinationIngestPort
 */
class RistStandardDestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationIngestPort: int<1024, 65531>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
