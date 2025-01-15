<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV' $Format
 * @property string|null $BucketAccountId
 * @property string $Bucket
 * @property string|null $Prefix
 */
class AnalyticsS3BucketDestination extends Shape
{
    /**
     * @param array{
     *     Format: 'CSV',
     *     BucketAccountId?: string|null,
     *     Bucket: string,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
