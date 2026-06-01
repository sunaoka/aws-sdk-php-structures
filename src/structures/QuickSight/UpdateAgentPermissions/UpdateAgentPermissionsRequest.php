<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgentPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgentId
 * @property string $AwsAccountId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateAgentPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AgentId: string,
     *     AwsAccountId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
