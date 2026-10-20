<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribePublishingDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationArn
 * @property string|null $KmsKeyArn
 * @property string|null $ExpectedBucketOwner
 */
class DestinationProperties extends Shape
{
    /**
     * @param array{
     *     DestinationArn?: string|null,
     *     KmsKeyArn?: string|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
