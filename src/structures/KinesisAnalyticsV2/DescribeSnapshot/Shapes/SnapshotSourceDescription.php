<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3PrefixLocation|null $S3PrefixLocation
 * @property SourceApplicationDescription|null $SourceApplicationDescription
 */
class SnapshotSourceDescription extends Shape
{
    /**
     * @param array{
     *     S3PrefixLocation?: S3PrefixLocation|null,
     *     SourceApplicationDescription?: SourceApplicationDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
