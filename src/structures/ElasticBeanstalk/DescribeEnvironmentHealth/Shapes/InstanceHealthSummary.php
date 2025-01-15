<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NoData
 * @property int|null $Unknown
 * @property int|null $Pending
 * @property int|null $Ok
 * @property int|null $Info
 * @property int|null $Warning
 * @property int|null $Degraded
 * @property int|null $Severe
 */
class InstanceHealthSummary extends Shape
{
    /**
     * @param array{
     *     NoData?: int|null,
     *     Unknown?: int|null,
     *     Pending?: int|null,
     *     Ok?: int|null,
     *     Info?: int|null,
     *     Warning?: int|null,
     *     Degraded?: int|null,
     *     Severe?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
