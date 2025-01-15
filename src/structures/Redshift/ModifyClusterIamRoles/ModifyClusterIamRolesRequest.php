<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterIamRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property list<string>|null $AddIamRoles
 * @property list<string>|null $RemoveIamRoles
 * @property string|null $DefaultIamRoleArn
 */
class ModifyClusterIamRolesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     AddIamRoles?: list<string>|null,
     *     RemoveIamRoles?: list<string>|null,
     *     DefaultIamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
