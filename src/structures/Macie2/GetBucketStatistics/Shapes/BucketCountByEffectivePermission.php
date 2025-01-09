<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $publiclyAccessible
 * @property int $publiclyReadable
 * @property int $publiclyWritable
 * @property int $unknown
 */
class BucketCountByEffectivePermission extends Shape
{
    /**
     * @param array{
     *     publiclyAccessible?: int,
     *     publiclyReadable?: int,
     *     publiclyWritable?: int,
     *     unknown?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
