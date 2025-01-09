<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property list<Shapes\ResourcePermission> $GrantPermissions
 * @property list<Shapes\ResourcePermission> $RevokePermissions
 */
class UpdateTopicPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>,
     *     RevokePermissions?: list<Shapes\ResourcePermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
