<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isActive
 * @property string|null $principalArn
 */
class ContainerServiceECRImagePullerRole extends Shape
{
    /**
     * @param array{
     *     isActive?: bool|null,
     *     principalArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
