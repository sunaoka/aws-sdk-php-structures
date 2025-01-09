<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterIamRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property list<string> $AddIamRoles
 * @property list<string> $RemoveIamRoles
 * @property string $DefaultIamRoleArn
 */
class ModifyClusterIamRolesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     AddIamRoles?: list<string>,
     *     RemoveIamRoles?: list<string>,
     *     DefaultIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
