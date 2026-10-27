<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandardDestinationEndpointConfiguration|null $Standard
 * @property RouterInputDestinationEndpointConfiguration|null $RouterInput
 */
class DestinationEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     Standard?: StandardDestinationEndpointConfiguration|null,
     *     RouterInput?: RouterInputDestinationEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
