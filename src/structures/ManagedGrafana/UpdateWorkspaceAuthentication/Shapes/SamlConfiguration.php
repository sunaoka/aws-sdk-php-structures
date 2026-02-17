<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdpMetadata $idpMetadata
 * @property AssertionAttributes|null $assertionAttributes
 * @property RoleValues|null $roleValues
 * @property list<string>|null $allowedOrganizations
 * @property int|null $loginValidityDuration
 */
class SamlConfiguration extends Shape
{
    /**
     * @param array{
     *     idpMetadata: IdpMetadata,
     *     assertionAttributes?: AssertionAttributes|null,
     *     roleValues?: RoleValues|null,
     *     allowedOrganizations?: list<string>|null,
     *     loginValidityDuration?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
