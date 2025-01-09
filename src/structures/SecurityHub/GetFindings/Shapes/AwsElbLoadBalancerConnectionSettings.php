<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $IdleTimeout
 */
class AwsElbLoadBalancerConnectionSettings extends Shape
{
    /**
     * @param array{IdleTimeout?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
