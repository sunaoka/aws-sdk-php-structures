<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DefaultVCpus
 * @property int $DefaultCores
 * @property int $DefaultThreadsPerCore
 * @property list<int> $ValidCores
 * @property list<int> $ValidThreadsPerCore
 */
class VCpuInfo extends Shape
{
    /**
     * @param array{
     *     DefaultVCpus?: int,
     *     DefaultCores?: int,
     *     DefaultThreadsPerCore?: int,
     *     ValidCores?: list<int>,
     *     ValidThreadsPerCore?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
