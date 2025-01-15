<?php

namespace Sunaoka\Aws\Structures\Macie2\GetBucketStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $external
 * @property int|null $internal
 * @property int|null $notShared
 * @property int|null $unknown
 */
class BucketCountBySharedAccessType extends Shape
{
    /**
     * @param array{
     *     external?: int|null,
     *     internal?: int|null,
     *     notShared?: int|null,
     *     unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
