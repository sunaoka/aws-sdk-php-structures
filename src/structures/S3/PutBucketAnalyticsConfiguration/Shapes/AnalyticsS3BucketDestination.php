<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV' $Format
 * @property string $BucketAccountId
 * @property string $Bucket
 * @property string $Prefix
 */
class AnalyticsS3BucketDestination extends Shape
{
    /**
     * @param array{
     *     Format: 'CSV',
     *     BucketAccountId?: string,
     *     Bucket: string,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
