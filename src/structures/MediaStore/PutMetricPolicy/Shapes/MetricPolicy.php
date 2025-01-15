<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutMetricPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ContainerLevelMetrics
 * @property list<MetricPolicyRule>|null $MetricPolicyRules
 */
class MetricPolicy extends Shape
{
    /**
     * @param array{
     *     ContainerLevelMetrics: 'ENABLED'|'DISABLED',
     *     MetricPolicyRules?: list<MetricPolicyRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
