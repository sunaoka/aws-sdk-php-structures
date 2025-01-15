<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElbLoadBalancerListener|null $Listener
 * @property list<string>|null $PolicyNames
 */
class AwsElbLoadBalancerListenerDescription extends Shape
{
    /**
     * @param array{
     *     Listener?: AwsElbLoadBalancerListener|null,
     *     PolicyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
