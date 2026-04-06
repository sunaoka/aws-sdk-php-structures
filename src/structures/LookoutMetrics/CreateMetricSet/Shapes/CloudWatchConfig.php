<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property BackTestConfiguration|null $BackTestConfiguration
 */
class CloudWatchConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     BackTestConfiguration?: BackTestConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
