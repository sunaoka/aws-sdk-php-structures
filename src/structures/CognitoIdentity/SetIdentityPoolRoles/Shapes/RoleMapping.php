<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetIdentityPoolRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Token'|'Rules' $Type
 * @property 'AuthenticatedRole'|'Deny' $AmbiguousRoleResolution
 * @property RulesConfigurationType $RulesConfiguration
 */
class RoleMapping extends Shape
{
    /**
     * @param array{
     *     Type: 'Token'|'Rules',
     *     AmbiguousRoleResolution?: 'AuthenticatedRole'|'Deny',
     *     RulesConfiguration?: RulesConfigurationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
