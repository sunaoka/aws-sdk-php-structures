<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArgoCdConfigResponse|null $argoCd
 */
class CapabilityConfigurationResponse extends Shape
{
    /**
     * @param array{argoCd?: ArgoCdConfigResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
