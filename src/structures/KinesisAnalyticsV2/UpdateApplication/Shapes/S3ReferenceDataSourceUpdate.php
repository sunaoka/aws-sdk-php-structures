<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARNUpdate
 * @property string $FileKeyUpdate
 */
class S3ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string,
     *     FileKeyUpdate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
