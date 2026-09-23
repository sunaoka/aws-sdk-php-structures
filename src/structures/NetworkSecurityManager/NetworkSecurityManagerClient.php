<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager;

class NetworkSecurityManagerClient extends \Aws\NetworkSecurityManager\NetworkSecurityManagerClient
{
    use CreateDeployment\CreateDeploymentTrait;
    use CreateDeploymentSnapshot\CreateDeploymentSnapshotTrait;
    use CreatePolicy\CreatePolicyTrait;
    use CreatePolicySnapshot\CreatePolicySnapshotTrait;
    use CreateRule\CreateRuleTrait;
    use CreateRuleSnapshot\CreateRuleSnapshotTrait;
    use CreateScope\CreateScopeTrait;
    use CreateScopeSnapshot\CreateScopeSnapshotTrait;
    use CreateTemplate\CreateTemplateTrait;
    use CreateTemplateSnapshot\CreateTemplateSnapshotTrait;
    use DeleteAdminAccount\DeleteAdminAccountTrait;
    use DeleteDeployment\DeleteDeploymentTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeleteRule\DeleteRuleTrait;
    use DeleteScope\DeleteScopeTrait;
    use DeleteTemplate\DeleteTemplateTrait;
    use GenerateRuleConfiguration\GenerateRuleConfigurationTrait;
    use GetAdminAccount\GetAdminAccountTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetPolicy\GetPolicyTrait;
    use GetRule\GetRuleTrait;
    use GetScope\GetScopeTrait;
    use GetTemplate\GetTemplateTrait;
    use ListAdminAccounts\ListAdminAccountsTrait;
    use ListAggregateResourceSynchronizationStatuses\ListAggregateResourceSynchronizationStatusesTrait;
    use ListDeploymentSnapshots\ListDeploymentSnapshotsTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListPolicySnapshots\ListPolicySnapshotsTrait;
    use ListResourceAssociations\ListResourceAssociationsTrait;
    use ListResourceSynchronizationStatuses\ListResourceSynchronizationStatusesTrait;
    use ListRuleSnapshots\ListRuleSnapshotsTrait;
    use ListRules\ListRulesTrait;
    use ListScopeSnapshots\ListScopeSnapshotsTrait;
    use ListScopes\ListScopesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTemplateSnapshots\ListTemplateSnapshotsTrait;
    use ListTemplates\ListTemplatesTrait;
    use PutAdminAccount\PutAdminAccountTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDeployment\UpdateDeploymentTrait;
    use UpdatePolicy\UpdatePolicyTrait;
    use UpdateRule\UpdateRuleTrait;
    use UpdateScope\UpdateScopeTrait;
    use UpdateTemplate\UpdateTemplateTrait;
}
