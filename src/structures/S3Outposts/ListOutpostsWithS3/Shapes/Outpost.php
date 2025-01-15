<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListOutpostsWithS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutpostArn
 * @property string|null $S3OutpostArn
 * @property string|null $OutpostId
 * @property string|null $OwnerId
 * @property int|null $CapacityInBytes
 */
class Outpost extends Shape
{
    /**
     * @param array{
     *     OutpostArn?: string|null,
     *     S3OutpostArn?: string|null,
     *     OutpostId?: string|null,
     *     OwnerId?: string|null,
     *     CapacityInBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
