<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions;

class VerifiedPermissionsClient extends \Aws\VerifiedPermissions\VerifiedPermissionsClient
{
    use BatchGetPolicy\BatchGetPolicyTrait;
    use BatchIsAuthorized\BatchIsAuthorizedTrait;
    use BatchIsAuthorizedWithToken\BatchIsAuthorizedWithTokenTrait;
    use CreateIdentitySource\CreateIdentitySourceTrait;
    use CreatePolicy\CreatePolicyTrait;
    use CreatePolicyStore\CreatePolicyStoreTrait;
    use CreatePolicyTemplate\CreatePolicyTemplateTrait;
    use DeleteIdentitySource\DeleteIdentitySourceTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeletePolicyStore\DeletePolicyStoreTrait;
    use DeletePolicyTemplate\DeletePolicyTemplateTrait;
    use GetIdentitySource\GetIdentitySourceTrait;
    use GetPolicy\GetPolicyTrait;
    use GetPolicyStore\GetPolicyStoreTrait;
    use GetPolicyTemplate\GetPolicyTemplateTrait;
    use GetSchema\GetSchemaTrait;
    use IsAuthorized\IsAuthorizedTrait;
    use IsAuthorizedWithToken\IsAuthorizedWithTokenTrait;
    use ListIdentitySources\ListIdentitySourcesTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListPolicyStores\ListPolicyStoresTrait;
    use ListPolicyTemplates\ListPolicyTemplatesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutSchema\PutSchemaTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIdentitySource\UpdateIdentitySourceTrait;
    use UpdatePolicy\UpdatePolicyTrait;
    use UpdatePolicyStore\UpdatePolicyStoreTrait;
    use UpdatePolicyTemplate\UpdatePolicyTemplateTrait;
}
