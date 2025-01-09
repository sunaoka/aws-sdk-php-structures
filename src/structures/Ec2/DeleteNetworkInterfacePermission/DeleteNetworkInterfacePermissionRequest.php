<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterfacePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfacePermissionId
 * @property bool $Force
 * @property bool $DryRun
 */
class DeleteNetworkInterfacePermissionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfacePermissionId: string,
     *     Force?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
