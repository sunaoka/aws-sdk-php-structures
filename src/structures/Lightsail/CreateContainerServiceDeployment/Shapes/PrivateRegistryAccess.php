<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContainerServiceDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContainerServiceECRImagePullerRole|null $ecrImagePullerRole
 */
class PrivateRegistryAccess extends Shape
{
    /**
     * @param array{ecrImagePullerRole?: ContainerServiceECRImagePullerRole|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
