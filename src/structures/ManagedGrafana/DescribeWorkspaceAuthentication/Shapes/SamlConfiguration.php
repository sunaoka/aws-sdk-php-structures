<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedOrganizations
 * @property AssertionAttributes $assertionAttributes
 * @property IdpMetadata $idpMetadata
 * @property int $loginValidityDuration
 * @property RoleValues $roleValues
 */
class SamlConfiguration extends Shape
{
    /**
     * @param array{
     *     allowedOrganizations?: list<string>,
     *     assertionAttributes?: AssertionAttributes,
     *     idpMetadata: IdpMetadata,
     *     loginValidityDuration?: int,
     *     roleValues?: RoleValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
