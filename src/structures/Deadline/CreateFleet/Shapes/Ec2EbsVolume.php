<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3000, 16000>|null $iops
 * @property int|null $sizeGiB
 * @property int<125, 1000>|null $throughputMiB
 */
class Ec2EbsVolume extends Shape
{
    /**
     * @param array{
     *     iops?: int<3000, 16000>|null,
     *     sizeGiB?: int|null,
     *     throughputMiB?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
