<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticGpuId
 * @property string $AvailabilityZone
 * @property string $ElasticGpuType
 * @property ElasticGpuHealth $ElasticGpuHealth
 * @property 'ATTACHED' $ElasticGpuState
 * @property string $InstanceId
 * @property list<Tag> $Tags
 */
class ElasticGpus extends Shape
{
    /**
     * @param array{
     *     ElasticGpuId?: string,
     *     AvailabilityZone?: string,
     *     ElasticGpuType?: string,
     *     ElasticGpuHealth?: ElasticGpuHealth,
     *     ElasticGpuState?: 'ATTACHED',
     *     InstanceId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
