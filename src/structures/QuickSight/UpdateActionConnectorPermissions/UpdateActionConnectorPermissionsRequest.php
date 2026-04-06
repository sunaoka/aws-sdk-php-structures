<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnectorPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ActionConnectorId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateActionConnectorPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ActionConnectorId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
