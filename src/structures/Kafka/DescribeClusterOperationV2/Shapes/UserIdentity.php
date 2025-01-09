<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSACCOUNT'|'AWSSERVICE' $Type
 * @property string $PrincipalId
 */
class UserIdentity extends Shape
{
    /**
     * @param array{
     *     Type?: 'AWSACCOUNT'|'AWSSERVICE',
     *     PrincipalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
