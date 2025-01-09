<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DescribeTableReplicaAutoScalingRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
