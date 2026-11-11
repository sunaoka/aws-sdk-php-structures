<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetBucket
 * @property string $targetPrefix
 * @property TargetObjectKeyFormat $targetObjectKeyFormat
 */
class LoggingEnabled extends Shape
{
    /**
     * @param array{
     *     targetBucket: string,
     *     targetPrefix: string,
     *     targetObjectKeyFormat: TargetObjectKeyFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
