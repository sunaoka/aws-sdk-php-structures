<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Owner
 * @property UserIdentity|null $UserIdentity
 * @property string|null $VpcConnectionArn
 */
class VpcConnectionInfoServerless extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Owner?: string|null,
     *     UserIdentity?: UserIdentity|null,
     *     VpcConnectionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
