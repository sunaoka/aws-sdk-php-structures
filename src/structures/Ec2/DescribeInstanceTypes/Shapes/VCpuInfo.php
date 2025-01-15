<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultVCpus
 * @property int|null $DefaultCores
 * @property int|null $DefaultThreadsPerCore
 * @property list<int>|null $ValidCores
 * @property list<int>|null $ValidThreadsPerCore
 */
class VCpuInfo extends Shape
{
    /**
     * @param array{
     *     DefaultVCpus?: int|null,
     *     DefaultCores?: int|null,
     *     DefaultThreadsPerCore?: int|null,
     *     ValidCores?: list<int>|null,
     *     ValidThreadsPerCore?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
