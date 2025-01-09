<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 9223372036854771712> $memory
 * @property double $cpus
 */
class SystemResourceLimits extends Shape
{
    /**
     * @param array{
     *     memory?: int<0, 9223372036854771712>,
     *     cpus?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
