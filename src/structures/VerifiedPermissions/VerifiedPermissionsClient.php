<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions;

class VerifiedPermissionsClient extends \Aws\VerifiedPermissions\VerifiedPermissionsClient
{
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
    use PutSchema\PutSchemaTrait;
    use UpdateIdentitySource\UpdateIdentitySourceTrait;
    use UpdatePolicy\UpdatePolicyTrait;
    use UpdatePolicyStore\UpdatePolicyStoreTrait;
    use UpdatePolicyTemplate\UpdatePolicyTemplateTrait;
}
