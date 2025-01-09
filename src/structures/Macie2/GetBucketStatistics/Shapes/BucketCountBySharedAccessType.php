<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $external
 * @property int $internal
 * @property int $notShared
 * @property int $unknown
 */
class BucketCountBySharedAccessType extends Shape
{
    /**
     * @param array{
     *     external?: int,
     *     internal?: int,
     *     notShared?: int,
     *     unknown?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
