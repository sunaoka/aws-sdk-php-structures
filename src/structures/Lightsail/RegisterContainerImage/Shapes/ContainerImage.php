<?php

namespace Sunaoka\Aws\Structures\Lightsail\RegisterContainerImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $image
 * @property string $digest
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class ContainerImage extends Shape
{
    /**
     * @param array{
     *     image?: string,
     *     digest?: string,
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
