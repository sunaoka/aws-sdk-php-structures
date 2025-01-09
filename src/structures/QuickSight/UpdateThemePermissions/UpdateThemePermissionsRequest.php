<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property list<Shapes\ResourcePermission> $GrantPermissions
 * @property list<Shapes\ResourcePermission> $RevokePermissions
 */
class UpdateThemePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>,
     *     RevokePermissions?: list<Shapes\ResourcePermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
