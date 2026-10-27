<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardDestinationEndpointConnectionDetails|null $Standard
 * @property RouterInputDestinationEndpointConnectionDetails|null $RouterInput
 */
class DestinationEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardDestinationEndpointConnectionDetails|null,
     *     RouterInput?: RouterInputDestinationEndpointConnectionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
