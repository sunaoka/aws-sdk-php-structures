<?php

namespace Sunaoka\Aws\Structures\Kafka\PutClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property string $Policy
 */
class PutClusterPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion?: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
