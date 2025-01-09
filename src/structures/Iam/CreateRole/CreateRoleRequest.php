<?php

namespace Sunaoka\Aws\Structures\Iam\CreateRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property string $RoleName
 * @property string $AssumeRolePolicyDocument
 * @property string $Description
 * @property int<3600, 43200> $MaxSessionDuration
 * @property string $PermissionsBoundary
 * @property list<Shapes\Tag> $Tags
 */
class CreateRoleRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     RoleName: string,
     *     AssumeRolePolicyDocument: string,
     *     Description?: string,
     *     MaxSessionDuration?: int<3600, 43200>,
     *     PermissionsBoundary?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
