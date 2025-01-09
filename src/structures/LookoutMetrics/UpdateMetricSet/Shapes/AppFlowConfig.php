<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $FlowName
 */
class AppFlowConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     FlowName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
