<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardSourceEndpointAssociatedResourceDetails|null $Standard
 * @property RouterOutputSourceEndpointAssociatedResourceDetails|null $RouterOutput
 */
class SourceEndpointAssociatedResourceDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardSourceEndpointAssociatedResourceDetails|null,
     *     RouterOutput?: RouterOutputSourceEndpointAssociatedResourceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
