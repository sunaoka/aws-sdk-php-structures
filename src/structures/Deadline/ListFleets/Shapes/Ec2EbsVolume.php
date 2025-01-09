<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeGiB
 * @property int $iops
 * @property int $throughputMiB
 */
class Ec2EbsVolume extends Shape
{
    /**
     * @param array{
     *     sizeGiB?: int,
     *     iops?: int,
     *     throughputMiB?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
