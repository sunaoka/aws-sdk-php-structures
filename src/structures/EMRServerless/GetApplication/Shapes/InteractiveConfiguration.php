<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $studioEnabled
 * @property bool|null $livyEndpointEnabled
 */
class InteractiveConfiguration extends Shape
{
    /**
     * @param array{
     *     studioEnabled?: bool|null,
     *     livyEndpointEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
