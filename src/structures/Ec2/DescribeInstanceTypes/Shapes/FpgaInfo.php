<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FpgaDeviceInfo> $Fpgas
 * @property int $TotalFpgaMemoryInMiB
 */
class FpgaInfo extends Shape
{
    /**
     * @param array{
     *     Fpgas?: list<FpgaDeviceInfo>,
     *     TotalFpgaMemoryInMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
