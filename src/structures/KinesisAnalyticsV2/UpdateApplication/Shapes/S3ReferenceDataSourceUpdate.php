<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketARNUpdate
 * @property string|null $FileKeyUpdate
 */
class S3ReferenceDataSourceUpdate extends Shape
{
    /**
     * @param array{
     *     BucketARNUpdate?: string|null,
     *     FileKeyUpdate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
