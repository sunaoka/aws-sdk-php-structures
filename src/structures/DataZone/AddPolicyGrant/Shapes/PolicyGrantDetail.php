<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddToProjectMemberPoolPolicyGrantDetail|null $addToProjectMemberPool
 * @property CreateAssetTypePolicyGrantDetail|null $createAssetType
 * @property CreateDomainUnitPolicyGrantDetail|null $createDomainUnit
 * @property Unit|null $createEnvironment
 * @property Unit|null $createEnvironmentFromBlueprint
 * @property CreateEnvironmentProfilePolicyGrantDetail|null $createEnvironmentProfile
 * @property CreateFormTypePolicyGrantDetail|null $createFormType
 * @property CreateGlossaryPolicyGrantDetail|null $createGlossary
 * @property CreateProjectPolicyGrantDetail|null $createProject
 * @property CreateProjectFromProjectProfilePolicyGrantDetail|null $createProjectFromProjectProfile
 * @property Unit|null $delegateCreateEnvironmentProfile
 * @property OverrideDomainUnitOwnersPolicyGrantDetail|null $overrideDomainUnitOwners
 * @property OverrideProjectOwnersPolicyGrantDetail|null $overrideProjectOwners
 */
class PolicyGrantDetail extends Shape
{
    /**
     * @param array{
     *     addToProjectMemberPool?: AddToProjectMemberPoolPolicyGrantDetail|null,
     *     createAssetType?: CreateAssetTypePolicyGrantDetail|null,
     *     createDomainUnit?: CreateDomainUnitPolicyGrantDetail|null,
     *     createEnvironment?: Unit|null,
     *     createEnvironmentFromBlueprint?: Unit|null,
     *     createEnvironmentProfile?: CreateEnvironmentProfilePolicyGrantDetail|null,
     *     createFormType?: CreateFormTypePolicyGrantDetail|null,
     *     createGlossary?: CreateGlossaryPolicyGrantDetail|null,
     *     createProject?: CreateProjectPolicyGrantDetail|null,
     *     createProjectFromProjectProfile?: CreateProjectFromProjectProfilePolicyGrantDetail|null,
     *     delegateCreateEnvironmentProfile?: Unit|null,
     *     overrideDomainUnitOwners?: OverrideDomainUnitOwnersPolicyGrantDetail|null,
     *     overrideProjectOwners?: OverrideProjectOwnersPolicyGrantDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
