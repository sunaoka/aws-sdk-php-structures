<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 */
class AddonNamespaceConfigResponse extends Shape
{
    /**
     * @param array{namespace?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
