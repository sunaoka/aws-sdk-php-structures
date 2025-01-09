<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isActive
 * @property string $principalArn
 */
class ContainerServiceECRImagePullerRole extends Shape
{
    /**
     * @param array{
     *     isActive?: bool,
     *     principalArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
