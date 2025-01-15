<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcConnectionArn
 * @property string|null $Owner
 * @property UserIdentity|null $UserIdentity
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class VpcConnectionInfo extends Shape
{
    /**
     * @param array{
     *     VpcConnectionArn?: string|null,
     *     Owner?: string|null,
     *     UserIdentity?: UserIdentity|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
