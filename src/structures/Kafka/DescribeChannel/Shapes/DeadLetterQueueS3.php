<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketArn
 * @property string|null $ErrorOutputPrefix
 * @property string|null $ExpectedBucketOwner
 */
class DeadLetterQueueS3 extends Shape
{
    /**
     * @param array{
     *     BucketArn: string,
     *     ErrorOutputPrefix?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
