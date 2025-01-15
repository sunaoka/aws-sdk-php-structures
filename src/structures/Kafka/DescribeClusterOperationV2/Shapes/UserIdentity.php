<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSACCOUNT'|'AWSSERVICE'|null $Type
 * @property string|null $PrincipalId
 */
class UserIdentity extends Shape
{
    /**
     * @param array{
     *     Type?: 'AWSACCOUNT'|'AWSSERVICE'|null,
     *     PrincipalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
