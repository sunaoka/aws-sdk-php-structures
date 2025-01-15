<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationReferenceDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketARN
 * @property string|null $FileKey
 */
class S3ReferenceDataSource extends Shape
{
    /**
     * @param array{
     *     BucketARN?: string|null,
     *     FileKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
