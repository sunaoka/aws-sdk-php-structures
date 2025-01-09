<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerServiceECRImagePullerRole $ecrImagePullerRole
 */
class PrivateRegistryAccess extends Shape
{
    /**
     * @param array{ecrImagePullerRole?: ContainerServiceECRImagePullerRole} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
