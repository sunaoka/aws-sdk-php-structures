<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetBucket
 * @property list<TargetGrant>|null $TargetGrants
 * @property string $TargetPrefix
 */
class LoggingEnabled extends Shape
{
    /**
     * @param array{
     *     TargetBucket: string,
     *     TargetGrants?: list<TargetGrant>|null,
     *     TargetPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
