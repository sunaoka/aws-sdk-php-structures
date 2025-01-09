<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketIntelligentTieringConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Days
 * @property 'ARCHIVE_ACCESS'|'DEEP_ARCHIVE_ACCESS' $AccessTier
 */
class Tiering extends Shape
{
    /**
     * @param array{
     *     Days: int,
     *     AccessTier: 'ARCHIVE_ACCESS'|'DEEP_ARCHIVE_ACCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
