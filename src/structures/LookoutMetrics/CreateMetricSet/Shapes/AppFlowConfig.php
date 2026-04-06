<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $FlowName
 */
class AppFlowConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     FlowName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
