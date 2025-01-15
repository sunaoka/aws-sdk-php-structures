<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property int|null $DurationSeconds
 */
class TargetGroupStickinessConfig extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     DurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
