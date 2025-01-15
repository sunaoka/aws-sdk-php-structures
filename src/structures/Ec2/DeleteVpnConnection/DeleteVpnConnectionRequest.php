<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property bool|null $DryRun
 */
class DeleteVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
