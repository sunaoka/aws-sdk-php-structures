<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class CrossAccountDiscoveryServiceStatus extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
