<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketARN
 * @property string $ExpectedBucketOwner
 * @property string|null $ErrorOutputPrefix
 */
class DeadLetterQueueS3Configuration extends Shape
{
    /**
     * @param array{
     *     BucketARN: string,
     *     ExpectedBucketOwner: string,
     *     ErrorOutputPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
