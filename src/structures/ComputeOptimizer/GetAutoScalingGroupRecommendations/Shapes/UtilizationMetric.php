<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory'|'EBS_READ_OPS_PER_SECOND'|'EBS_WRITE_OPS_PER_SECOND'|'EBS_READ_BYTES_PER_SECOND'|'EBS_WRITE_BYTES_PER_SECOND'|'DISK_READ_OPS_PER_SECOND'|'DISK_WRITE_OPS_PER_SECOND'|'DISK_READ_BYTES_PER_SECOND'|'DISK_WRITE_BYTES_PER_SECOND'|'NETWORK_IN_BYTES_PER_SECOND'|'NETWORK_OUT_BYTES_PER_SECOND'|'NETWORK_PACKETS_IN_PER_SECOND'|'NETWORK_PACKETS_OUT_PER_SECOND'|'GPU_PERCENTAGE'|'GPU_MEMORY_PERCENTAGE'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 */
class UtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory'|'EBS_READ_OPS_PER_SECOND'|'EBS_WRITE_OPS_PER_SECOND'|'EBS_READ_BYTES_PER_SECOND'|'EBS_WRITE_BYTES_PER_SECOND'|'DISK_READ_OPS_PER_SECOND'|'DISK_WRITE_OPS_PER_SECOND'|'DISK_READ_BYTES_PER_SECOND'|'DISK_WRITE_BYTES_PER_SECOND'|'NETWORK_IN_BYTES_PER_SECOND'|'NETWORK_OUT_BYTES_PER_SECOND'|'NETWORK_PACKETS_IN_PER_SECOND'|'NETWORK_PACKETS_OUT_PER_SECOND'|'GPU_PERCENTAGE'|'GPU_MEMORY_PERCENTAGE'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
