<?php

namespace Sunaoka\Aws\Structures\Lightsail\RegisterContainerImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $image
 * @property string|null $digest
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ContainerImage extends Shape
{
    /**
     * @param array{
     *     image?: string|null,
     *     digest?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
