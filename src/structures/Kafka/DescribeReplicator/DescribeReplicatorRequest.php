<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicatorArn
 */
class DescribeReplicatorRequest extends Request
{
    /**
     * @param array{ReplicatorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
