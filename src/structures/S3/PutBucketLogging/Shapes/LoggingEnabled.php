<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetBucket
 * @property list<TargetGrant>|null $TargetGrants
 * @property string $TargetPrefix
 * @property TargetObjectKeyFormat|null $TargetObjectKeyFormat
 */
class LoggingEnabled extends Shape
{
    /**
     * @param array{
     *     TargetBucket: string,
     *     TargetGrants?: list<TargetGrant>|null,
     *     TargetPrefix: string,
     *     TargetObjectKeyFormat?: TargetObjectKeyFormat|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
