<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePublicIpv4Pool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $PoolId
 * @property string $NetworkBorderGroup
 */
class DeletePublicIpv4PoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     PoolId: string,
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
