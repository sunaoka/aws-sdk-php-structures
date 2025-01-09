<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NoData
 * @property int $Unknown
 * @property int $Pending
 * @property int $Ok
 * @property int $Info
 * @property int $Warning
 * @property int $Degraded
 * @property int $Severe
 */
class InstanceHealthSummary extends Shape
{
    /**
     * @param array{
     *     NoData?: int,
     *     Unknown?: int,
     *     Pending?: int,
     *     Ok?: int,
     *     Info?: int,
     *     Warning?: int,
     *     Degraded?: int,
     *     Severe?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
