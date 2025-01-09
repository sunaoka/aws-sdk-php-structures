<?php

namespace Sunaoka\Aws\Structures\Greengrass\AssociateRoleToGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $RoleArn
 */
class AssociateRoleToGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
