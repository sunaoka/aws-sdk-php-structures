<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ClusterName
 * @property array<string, string>|null $Tags
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ClusterName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
