<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $cloudMetricEnabled
 * @property string|null $metricRuleRoleArn
 */
class MetricsConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudMetricEnabled?: bool|null,
     *     metricRuleRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
