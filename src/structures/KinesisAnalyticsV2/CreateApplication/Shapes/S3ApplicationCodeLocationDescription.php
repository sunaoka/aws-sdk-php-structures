<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $FileKey
 * @property string $ObjectVersion
 */
class S3ApplicationCodeLocationDescription extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     FileKey: string,
     *     ObjectVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
