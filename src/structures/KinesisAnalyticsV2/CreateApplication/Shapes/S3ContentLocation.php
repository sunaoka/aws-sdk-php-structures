<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $FileKey
 * @property string|null $ObjectVersion
 */
class S3ContentLocation extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     FileKey: string,
     *     ObjectVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
