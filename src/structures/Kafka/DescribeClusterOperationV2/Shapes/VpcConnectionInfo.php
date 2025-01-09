<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcConnectionArn
 * @property string $Owner
 * @property UserIdentity $UserIdentity
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class VpcConnectionInfo extends Shape
{
    /**
     * @param array{
     *     VpcConnectionArn?: string,
     *     Owner?: string,
     *     UserIdentity?: UserIdentity,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
