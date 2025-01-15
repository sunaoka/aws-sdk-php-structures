<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FpgaDeviceInfo>|null $Fpgas
 * @property int|null $TotalFpgaMemoryInMiB
 */
class FpgaInfo extends Shape
{
    /**
     * @param array{
     *     Fpgas?: list<FpgaDeviceInfo>|null,
     *     TotalFpgaMemoryInMiB?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
