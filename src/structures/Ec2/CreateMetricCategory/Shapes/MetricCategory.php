<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMetricCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricCategoryId
 * @property list<string>|null $Metrics
 * @property list<Tag>|null $Tags
 */
class MetricCategory extends Shape
{
    /**
     * @param array{
     *     MetricCategoryId?: string|null,
     *     Metrics?: list<string>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
