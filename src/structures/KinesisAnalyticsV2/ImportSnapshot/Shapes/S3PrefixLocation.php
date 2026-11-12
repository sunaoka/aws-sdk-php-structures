<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ImportSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $KeyPrefix
 */
class S3PrefixLocation extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     KeyPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
