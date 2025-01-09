<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $cloudMetricEnabled
 * @property string $metricRuleRoleArn
 */
class MetricsConfiguration extends Shape
{
    /**
     * @param array{
     *     cloudMetricEnabled?: bool,
     *     metricRuleRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
