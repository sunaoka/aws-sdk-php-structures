<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerServiceECRImagePullerRoleRequest|null $ecrImagePullerRole
 */
class PrivateRegistryAccessRequest extends Shape
{
    /**
     * @param array{ecrImagePullerRole?: ContainerServiceECRImagePullerRoleRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
