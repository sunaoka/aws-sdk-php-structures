<?php

namespace Sunaoka\Aws\Structures\S3Control\ListRegionalBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $BucketArn
 * @property bool $PublicAccessBlockEnabled
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $OutpostId
 */
class RegionalBucket extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     BucketArn?: string,
     *     PublicAccessBlockEnabled: bool,
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     OutpostId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
