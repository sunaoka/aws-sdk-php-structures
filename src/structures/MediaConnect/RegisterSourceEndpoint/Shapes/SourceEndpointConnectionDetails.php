<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardSourceEndpointConnectionDetails|null $Standard
 * @property RouterOutputSourceEndpointConnectionDetails|null $RouterOutput
 */
class SourceEndpointConnectionDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardSourceEndpointConnectionDetails|null,
     *     RouterOutput?: RouterOutputSourceEndpointConnectionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
