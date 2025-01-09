<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListOutpostsWithS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutpostArn
 * @property string $S3OutpostArn
 * @property string $OutpostId
 * @property string $OwnerId
 * @property int $CapacityInBytes
 */
class Outpost extends Shape
{
    /**
     * @param array{
     *     OutpostArn?: string,
     *     S3OutpostArn?: string,
     *     OutpostId?: string,
     *     OwnerId?: string,
     *     CapacityInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
