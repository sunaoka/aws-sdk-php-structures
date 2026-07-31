<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicPermissionsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TopicId
 * @property list<Shapes\ResourcePermission>|null $GrantPermissions
 * @property list<Shapes\ResourcePermission>|null $RevokePermissions
 */
class UpdateTopicPermissionsV2Request extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TopicId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>|null,
     *     RevokePermissions?: list<Shapes\ResourcePermission>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
