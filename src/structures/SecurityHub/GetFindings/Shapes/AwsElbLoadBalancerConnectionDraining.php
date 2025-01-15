<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property int|null $Timeout
 */
class AwsElbLoadBalancerConnectionDraining extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Timeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
