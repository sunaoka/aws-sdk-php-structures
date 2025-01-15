<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $posixUser
 * @property SystemResourceLimits|null $systemResourceLimits
 * @property string|null $windowsUser
 */
class ComponentRunWith extends Shape
{
    /**
     * @param array{
     *     posixUser?: string|null,
     *     systemResourceLimits?: SystemResourceLimits|null,
     *     windowsUser?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
