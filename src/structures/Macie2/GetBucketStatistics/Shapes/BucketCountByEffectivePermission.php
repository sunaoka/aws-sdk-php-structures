<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $publiclyAccessible
 * @property int|null $publiclyReadable
 * @property int|null $publiclyWritable
 * @property int|null $unknown
 */
class BucketCountByEffectivePermission extends Shape
{
    /**
     * @param array{
     *     publiclyAccessible?: int|null,
     *     publiclyReadable?: int|null,
     *     publiclyWritable?: int|null,
     *     unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
