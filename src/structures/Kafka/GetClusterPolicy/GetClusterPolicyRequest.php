<?php

namespace Sunaoka\Aws\Structures\Kafka\GetClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 */
class GetClusterPolicyRequest extends Request
{
    /**
     * @param array{ClusterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
