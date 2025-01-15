<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string|null $BasePath
 */
class S3ContentBaseLocation extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     BasePath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
