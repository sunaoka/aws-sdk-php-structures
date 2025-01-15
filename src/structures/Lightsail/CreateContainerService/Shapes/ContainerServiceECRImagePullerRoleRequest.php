<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isActive
 */
class ContainerServiceECRImagePullerRoleRequest extends Shape
{
    /**
     * @param array{isActive?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
