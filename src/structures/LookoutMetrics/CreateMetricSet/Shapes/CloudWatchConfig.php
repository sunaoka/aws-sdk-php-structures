<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property BackTestConfiguration $BackTestConfiguration
 */
class CloudWatchConfig extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     BackTestConfiguration?: BackTestConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
