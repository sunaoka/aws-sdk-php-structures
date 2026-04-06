<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFlowPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 * @property list<Shapes\Permission>|null $GrantPermissions
 * @property list<Shapes\Permission>|null $RevokePermissions
 */
class UpdateFlowPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string,
     *     GrantPermissions?: list<Shapes\Permission>|null,
     *     RevokePermissions?: list<Shapes\Permission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
