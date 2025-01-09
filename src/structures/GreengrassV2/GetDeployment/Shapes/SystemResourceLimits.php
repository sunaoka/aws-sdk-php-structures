<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $memory
 * @property double $cpus
 */
class SystemResourceLimits extends Shape
{
    /**
     * @param array{
     *     memory?: int,
     *     cpus?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
