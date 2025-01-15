<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateThemePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
