<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketLogDestination $s3Bucket
 */
class AudioLogDestination extends Shape
{
    /**
     * @param array{s3Bucket: S3BucketLogDestination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
