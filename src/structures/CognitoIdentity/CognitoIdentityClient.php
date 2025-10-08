<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity;

class CognitoIdentityClient extends \Aws\CognitoIdentity\CognitoIdentityClient
{
    use CreateIdentityPool\CreateIdentityPoolTrait;
    use DeleteIdentities\DeleteIdentitiesTrait;
    use DeleteIdentityPool\DeleteIdentityPoolTrait;
    use DescribeIdentity\DescribeIdentityTrait;
    use DescribeIdentityPool\DescribeIdentityPoolTrait;
    use GetCredentialsForIdentity\GetCredentialsForIdentityTrait;
    use GetId\GetIdTrait;
    use GetIdentityPoolRoles\GetIdentityPoolRolesTrait;
    use GetOpenIdToken\GetOpenIdTokenTrait;
    use GetOpenIdTokenForDeveloperIdentity\GetOpenIdTokenForDeveloperIdentityTrait;
    use GetPrincipalTagAttributeMap\GetPrincipalTagAttributeMapTrait;
    use ListIdentities\ListIdentitiesTrait;
    use ListIdentityPools\ListIdentityPoolsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use LookupDeveloperIdentity\LookupDeveloperIdentityTrait;
    use MergeDeveloperIdentities\MergeDeveloperIdentitiesTrait;
    use SetIdentityPoolRoles\SetIdentityPoolRolesTrait;
    use SetPrincipalTagAttributeMap\SetPrincipalTagAttributeMapTrait;
    use TagResource\TagResourceTrait;
    use UnlinkDeveloperIdentity\UnlinkDeveloperIdentityTrait;
    use UnlinkIdentity\UnlinkIdentityTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIdentityPool\UpdateIdentityPoolTrait;
}
