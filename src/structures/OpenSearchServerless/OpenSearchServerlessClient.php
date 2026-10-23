<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless;

class OpenSearchServerlessClient extends \Aws\OpenSearchServerless\OpenSearchServerlessClient
{
    use BatchGetCollection\BatchGetCollectionTrait;
    use BatchGetCollectionGroup\BatchGetCollectionGroupTrait;
    use BatchGetEffectiveLifecyclePolicy\BatchGetEffectiveLifecyclePolicyTrait;
    use BatchGetLifecyclePolicy\BatchGetLifecyclePolicyTrait;
    use BatchGetVpcEndpoint\BatchGetVpcEndpointTrait;
    use CancelIngestionJob\CancelIngestionJobTrait;
    use CreateAccessPolicy\CreateAccessPolicyTrait;
    use CreateCollection\CreateCollectionTrait;
    use CreateCollectionGroup\CreateCollectionGroupTrait;
    use CreateIndex\CreateIndexTrait;
    use CreateIngestionJob\CreateIngestionJobTrait;
    use CreateIngestionStream\CreateIngestionStreamTrait;
    use CreateLifecyclePolicy\CreateLifecyclePolicyTrait;
    use CreateSecurityConfig\CreateSecurityConfigTrait;
    use CreateSecurityPolicy\CreateSecurityPolicyTrait;
    use CreateVpcEndpoint\CreateVpcEndpointTrait;
    use DeleteAccessPolicy\DeleteAccessPolicyTrait;
    use DeleteCollection\DeleteCollectionTrait;
    use DeleteCollectionGroup\DeleteCollectionGroupTrait;
    use DeleteIndex\DeleteIndexTrait;
    use DeleteIngestionStream\DeleteIngestionStreamTrait;
    use DeleteLifecyclePolicy\DeleteLifecyclePolicyTrait;
    use DeleteSecurityConfig\DeleteSecurityConfigTrait;
    use DeleteSecurityPolicy\DeleteSecurityPolicyTrait;
    use DeleteVpcEndpoint\DeleteVpcEndpointTrait;
    use GetAccessPolicy\GetAccessPolicyTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetIndex\GetIndexTrait;
    use GetIngestionJob\GetIngestionJobTrait;
    use GetIngestionStream\GetIngestionStreamTrait;
    use GetPoliciesStats\GetPoliciesStatsTrait;
    use GetSecurityConfig\GetSecurityConfigTrait;
    use GetSecurityPolicy\GetSecurityPolicyTrait;
    use ListAccessPolicies\ListAccessPoliciesTrait;
    use ListCollectionGroups\ListCollectionGroupsTrait;
    use ListCollections\ListCollectionsTrait;
    use ListIngestionJobs\ListIngestionJobsTrait;
    use ListIngestionStreams\ListIngestionStreamsTrait;
    use ListLifecyclePolicies\ListLifecyclePoliciesTrait;
    use ListSecurityConfigs\ListSecurityConfigsTrait;
    use ListSecurityPolicies\ListSecurityPoliciesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVpcEndpoints\ListVpcEndpointsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccessPolicy\UpdateAccessPolicyTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateCollection\UpdateCollectionTrait;
    use UpdateCollectionGroup\UpdateCollectionGroupTrait;
    use UpdateIndex\UpdateIndexTrait;
    use UpdateLifecyclePolicy\UpdateLifecyclePolicyTrait;
    use UpdateSecurityConfig\UpdateSecurityConfigTrait;
    use UpdateSecurityPolicy\UpdateSecurityPolicyTrait;
    use UpdateVpcEndpoint\UpdateVpcEndpointTrait;
}
