<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSetPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateDataSetPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
