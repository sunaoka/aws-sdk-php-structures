<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedOrganizations
 * @property AssertionAttributes|null $assertionAttributes
 * @property IdpMetadata $idpMetadata
 * @property int|null $loginValidityDuration
 * @property RoleValues|null $roleValues
 */
class SamlConfiguration extends Shape
{
    /**
     * @param array{
     *     allowedOrganizations?: list<string>|null,
     *     assertionAttributes?: AssertionAttributes|null,
     *     idpMetadata: IdpMetadata,
     *     loginValidityDuration?: int|null,
     *     roleValues?: RoleValues|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
