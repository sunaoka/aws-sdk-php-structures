<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DiscoverInputSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $FileKey
 */
class S3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     FileKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
