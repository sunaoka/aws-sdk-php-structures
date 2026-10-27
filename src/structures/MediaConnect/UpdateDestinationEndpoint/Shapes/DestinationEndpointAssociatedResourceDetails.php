<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardDestinationEndpointAssociatedResourceDetails|null $Standard
 * @property RouterInputDestinationEndpointAssociatedResourceDetails|null $RouterInput
 */
class DestinationEndpointAssociatedResourceDetails extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardDestinationEndpointAssociatedResourceDetails|null,
     *     RouterInput?: RouterInputDestinationEndpointAssociatedResourceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
