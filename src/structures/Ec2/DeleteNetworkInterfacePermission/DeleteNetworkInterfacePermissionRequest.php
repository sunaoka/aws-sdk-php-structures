<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterfacePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfacePermissionId
 * @property bool|null $Force
 * @property bool|null $DryRun
 */
class DeleteNetworkInterfacePermissionRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfacePermissionId: string,
     *     Force?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
