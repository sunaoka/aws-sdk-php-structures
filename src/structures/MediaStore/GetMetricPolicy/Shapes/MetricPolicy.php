<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetMetricPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ContainerLevelMetrics
 * @property list<MetricPolicyRule> $MetricPolicyRules
 */
class MetricPolicy extends Shape
{
    /**
     * @param array{
     *     ContainerLevelMetrics: 'ENABLED'|'DISABLED',
     *     MetricPolicyRules?: list<MetricPolicyRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
