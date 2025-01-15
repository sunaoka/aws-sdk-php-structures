<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetIdentityPoolRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Token'|'Rules' $Type
 * @property 'AuthenticatedRole'|'Deny'|null $AmbiguousRoleResolution
 * @property RulesConfigurationType|null $RulesConfiguration
 */
class RoleMapping extends Shape
{
    /**
     * @param array{
     *     Type: 'Token'|'Rules',
     *     AmbiguousRoleResolution?: 'AuthenticatedRole'|'Deny'|null,
     *     RulesConfiguration?: RulesConfigurationType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
