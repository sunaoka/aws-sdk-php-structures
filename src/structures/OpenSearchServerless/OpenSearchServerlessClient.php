<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless;

class OpenSearchServerlessClient extends \Aws\OpenSearchServerless\OpenSearchServerlessClient
{
    use BatchGetCollection\BatchGetCollectionTrait;
    use BatchGetVpcEndpoint\BatchGetVpcEndpointTrait;
    use CreateAccessPolicy\CreateAccessPolicyTrait;
    use CreateCollection\CreateCollectionTrait;
    use CreateSecurityConfig\CreateSecurityConfigTrait;
    use CreateSecurityPolicy\CreateSecurityPolicyTrait;
    use CreateVpcEndpoint\CreateVpcEndpointTrait;
    use DeleteAccessPolicy\DeleteAccessPolicyTrait;
    use DeleteCollection\DeleteCollectionTrait;
    use DeleteSecurityConfig\DeleteSecurityConfigTrait;
    use DeleteSecurityPolicy\DeleteSecurityPolicyTrait;
    use DeleteVpcEndpoint\DeleteVpcEndpointTrait;
    use GetAccessPolicy\GetAccessPolicyTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetPoliciesStats\GetPoliciesStatsTrait;
    use GetSecurityConfig\GetSecurityConfigTrait;
    use GetSecurityPolicy\GetSecurityPolicyTrait;
    use ListAccessPolicies\ListAccessPoliciesTrait;
    use ListCollections\ListCollectionsTrait;
    use ListSecurityConfigs\ListSecurityConfigsTrait;
    use ListSecurityPolicies\ListSecurityPoliciesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVpcEndpoints\ListVpcEndpointsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccessPolicy\UpdateAccessPolicyTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateCollection\UpdateCollectionTrait;
    use UpdateSecurityConfig\UpdateSecurityConfigTrait;
    use UpdateSecurityPolicy\UpdateSecurityPolicyTrait;
    use UpdateVpcEndpoint\UpdateVpcEndpointTrait;
}
