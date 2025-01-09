<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElbLoadBalancerListener $Listener
 * @property list<string> $PolicyNames
 */
class AwsElbLoadBalancerListenerDescription extends Shape
{
    /**
     * @param array{
     *     Listener?: AwsElbLoadBalancerListener,
     *     PolicyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
