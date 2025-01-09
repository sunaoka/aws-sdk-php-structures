<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeGiB
 * @property int<3000, 16000> $iops
 * @property int<125, 1000> $throughputMiB
 */
class Ec2EbsVolume extends Shape
{
    /**
     * @param array{
     *     sizeGiB?: int,
     *     iops?: int<3000, 16000>,
     *     throughputMiB?: int<125, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
