<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJobResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketPrefix
 * @property string $BucketRegion
 */
class S3BucketConfiguration extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketPrefix: string,
     *     BucketRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
