<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetBucket
 * @property list<TargetGrant> $TargetGrants
 * @property string $TargetPrefix
 * @property TargetObjectKeyFormat $TargetObjectKeyFormat
 */
class LoggingEnabled extends Shape
{
    /**
     * @param array{
     *     TargetBucket: string,
     *     TargetGrants?: list<TargetGrant>,
     *     TargetPrefix: string,
     *     TargetObjectKeyFormat?: TargetObjectKeyFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
