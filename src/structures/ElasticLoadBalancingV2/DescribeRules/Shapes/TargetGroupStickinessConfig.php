<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $DurationSeconds
 */
class TargetGroupStickinessConfig extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     DurationSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
