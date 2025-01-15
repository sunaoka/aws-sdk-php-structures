<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $sizeGiB
 * @property int<3000, 16000>|null $iops
 * @property int<125, 1000>|null $throughputMiB
 */
class Ec2EbsVolume extends Shape
{
    /**
     * @param array{
     *     sizeGiB?: int|null,
     *     iops?: int<3000, 16000>|null,
     *     throughputMiB?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
