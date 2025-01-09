<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddToProjectMemberPoolPolicyGrantDetail $addToProjectMemberPool
 * @property CreateAssetTypePolicyGrantDetail $createAssetType
 * @property CreateDomainUnitPolicyGrantDetail $createDomainUnit
 * @property Unit $createEnvironment
 * @property Unit $createEnvironmentFromBlueprint
 * @property CreateEnvironmentProfilePolicyGrantDetail $createEnvironmentProfile
 * @property CreateFormTypePolicyGrantDetail $createFormType
 * @property CreateGlossaryPolicyGrantDetail $createGlossary
 * @property CreateProjectPolicyGrantDetail $createProject
 * @property CreateProjectFromProjectProfilePolicyGrantDetail $createProjectFromProjectProfile
 * @property Unit $delegateCreateEnvironmentProfile
 * @property OverrideDomainUnitOwnersPolicyGrantDetail $overrideDomainUnitOwners
 * @property OverrideProjectOwnersPolicyGrantDetail $overrideProjectOwners
 */
class PolicyGrantDetail extends Shape
{
    /**
     * @param array{
     *     addToProjectMemberPool?: AddToProjectMemberPoolPolicyGrantDetail,
     *     createAssetType?: CreateAssetTypePolicyGrantDetail,
     *     createDomainUnit?: CreateDomainUnitPolicyGrantDetail,
     *     createEnvironment?: Unit,
     *     createEnvironmentFromBlueprint?: Unit,
     *     createEnvironmentProfile?: CreateEnvironmentProfilePolicyGrantDetail,
     *     createFormType?: CreateFormTypePolicyGrantDetail,
     *     createGlossary?: CreateGlossaryPolicyGrantDetail,
     *     createProject?: CreateProjectPolicyGrantDetail,
     *     createProjectFromProjectProfile?: CreateProjectFromProjectProfilePolicyGrantDetail,
     *     delegateCreateEnvironmentProfile?: Unit,
     *     overrideDomainUnitOwners?: OverrideDomainUnitOwnersPolicyGrantDetail,
     *     overrideProjectOwners?: OverrideProjectOwnersPolicyGrantDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
