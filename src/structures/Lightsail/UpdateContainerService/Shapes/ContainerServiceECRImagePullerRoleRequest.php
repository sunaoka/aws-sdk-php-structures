<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isActive
 */
class ContainerServiceECRImagePullerRoleRequest extends Shape
{
    /**
     * @param array{isActive?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
