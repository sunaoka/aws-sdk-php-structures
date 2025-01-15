<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticGpuId
 * @property string|null $AvailabilityZone
 * @property string|null $ElasticGpuType
 * @property ElasticGpuHealth|null $ElasticGpuHealth
 * @property 'ATTACHED'|null $ElasticGpuState
 * @property string|null $InstanceId
 * @property list<Tag>|null $Tags
 */
class ElasticGpus extends Shape
{
    /**
     * @param array{
     *     ElasticGpuId?: string|null,
     *     AvailabilityZone?: string|null,
     *     ElasticGpuType?: string|null,
     *     ElasticGpuHealth?: ElasticGpuHealth|null,
     *     ElasticGpuState?: 'ATTACHED'|null,
     *     InstanceId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
