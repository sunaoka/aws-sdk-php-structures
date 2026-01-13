<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateDomainUnitPolicyGrantDetail|null $createDomainUnit
 * @property OverrideDomainUnitOwnersPolicyGrantDetail|null $overrideDomainUnitOwners
 * @property AddToProjectMemberPoolPolicyGrantDetail|null $addToProjectMemberPool
 * @property OverrideProjectOwnersPolicyGrantDetail|null $overrideProjectOwners
 * @property CreateGlossaryPolicyGrantDetail|null $createGlossary
 * @property CreateFormTypePolicyGrantDetail|null $createFormType
 * @property CreateAssetTypePolicyGrantDetail|null $createAssetType
 * @property CreateProjectPolicyGrantDetail|null $createProject
 * @property CreateEnvironmentProfilePolicyGrantDetail|null $createEnvironmentProfile
 * @property Unit|null $delegateCreateEnvironmentProfile
 * @property Unit|null $createEnvironment
 * @property Unit|null $createEnvironmentFromBlueprint
 * @property CreateProjectFromProjectProfilePolicyGrantDetail|null $createProjectFromProjectProfile
 * @property UseAssetTypePolicyGrantDetail|null $useAssetType
 */
class PolicyGrantDetail extends Shape
{
    /**
     * @param array{
     *     createDomainUnit?: CreateDomainUnitPolicyGrantDetail|null,
     *     overrideDomainUnitOwners?: OverrideDomainUnitOwnersPolicyGrantDetail|null,
     *     addToProjectMemberPool?: AddToProjectMemberPoolPolicyGrantDetail|null,
     *     overrideProjectOwners?: OverrideProjectOwnersPolicyGrantDetail|null,
     *     createGlossary?: CreateGlossaryPolicyGrantDetail|null,
     *     createFormType?: CreateFormTypePolicyGrantDetail|null,
     *     createAssetType?: CreateAssetTypePolicyGrantDetail|null,
     *     createProject?: CreateProjectPolicyGrantDetail|null,
     *     createEnvironmentProfile?: CreateEnvironmentProfilePolicyGrantDetail|null,
     *     delegateCreateEnvironmentProfile?: Unit|null,
     *     createEnvironment?: Unit|null,
     *     createEnvironmentFromBlueprint?: Unit|null,
     *     createProjectFromProjectProfile?: CreateProjectFromProjectProfilePolicyGrantDetail|null,
     *     useAssetType?: UseAssetTypePolicyGrantDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
