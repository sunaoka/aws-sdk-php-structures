<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ClusterName
 * @property array<string, string> $Tags
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ClusterName: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
