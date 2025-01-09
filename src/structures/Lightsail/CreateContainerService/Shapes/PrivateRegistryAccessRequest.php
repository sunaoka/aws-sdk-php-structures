<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerServiceECRImagePullerRoleRequest $ecrImagePullerRole
 */
class PrivateRegistryAccessRequest extends Shape
{
    /**
     * @param array{ecrImagePullerRole?: ContainerServiceECRImagePullerRoleRequest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
