<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $studioEnabled
 * @property bool $livyEndpointEnabled
 */
class InteractiveConfiguration extends Shape
{
    /**
     * @param array{
     *     studioEnabled?: bool,
     *     livyEndpointEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
