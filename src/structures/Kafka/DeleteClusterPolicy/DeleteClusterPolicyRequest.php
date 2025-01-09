<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class DeleteClusterPolicyRequest extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
