<?php

namespace Sunaoka\Aws\Structures\Iam\CreateRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property string $RoleName
 * @property string $AssumeRolePolicyDocument
 * @property string|null $Description
 * @property int<3600, 43200>|null $MaxSessionDuration
 * @property string|null $PermissionsBoundary
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRoleRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     RoleName: string,
     *     AssumeRolePolicyDocument: string,
     *     Description?: string|null,
     *     MaxSessionDuration?: int<3600, 43200>|null,
     *     PermissionsBoundary?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
