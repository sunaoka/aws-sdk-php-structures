<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $posixUser
 * @property SystemResourceLimits $systemResourceLimits
 * @property string $windowsUser
 */
class ComponentRunWith extends Shape
{
    /**
     * @param array{
     *     posixUser?: string,
     *     systemResourceLimits?: SystemResourceLimits,
     *     windowsUser?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
