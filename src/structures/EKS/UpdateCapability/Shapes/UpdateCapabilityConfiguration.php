<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateArgoCdConfig|null $argoCd
 */
class UpdateCapabilityConfiguration extends Shape
{
    /**
     * @param array{argoCd?: UpdateArgoCdConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
