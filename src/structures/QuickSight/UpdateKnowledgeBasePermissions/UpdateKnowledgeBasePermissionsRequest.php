<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBasePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $KnowledgeBaseId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateKnowledgeBasePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     KnowledgeBaseId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
