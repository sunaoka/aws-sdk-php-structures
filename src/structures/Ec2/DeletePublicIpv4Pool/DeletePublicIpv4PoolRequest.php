<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePublicIpv4Pool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PoolId
 * @property string|null $NetworkBorderGroup
 */
class DeletePublicIpv4PoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PoolId: string,
     *     NetworkBorderGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
