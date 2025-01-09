<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Owner
 * @property UserIdentity $UserIdentity
 * @property string $VpcConnectionArn
 */
class VpcConnectionInfoServerless extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Owner?: string,
     *     UserIdentity?: UserIdentity,
     *     VpcConnectionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
