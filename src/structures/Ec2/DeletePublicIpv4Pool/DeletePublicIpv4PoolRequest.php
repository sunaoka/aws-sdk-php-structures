<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePublicIpv4Pool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $PoolId
 */
class DeletePublicIpv4PoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
