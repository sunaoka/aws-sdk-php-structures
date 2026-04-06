<?php

namespace Sunaoka\Aws\Structures\Sts;

class StsClient extends \Aws\Sts\StsClient
{
    use AssumeRole\AssumeRoleTrait;
    use AssumeRoleWithSAML\AssumeRoleWithSAMLTrait;
    use AssumeRoleWithWebIdentity\AssumeRoleWithWebIdentityTrait;
    use AssumeRoot\AssumeRootTrait;
    use DecodeAuthorizationMessage\DecodeAuthorizationMessageTrait;
    use GetAccessKeyInfo\GetAccessKeyInfoTrait;
    use GetCallerIdentity\GetCallerIdentityTrait;
    use GetDelegatedAccessToken\GetDelegatedAccessTokenTrait;
    use GetFederationToken\GetFederationTokenTrait;
    use GetSessionToken\GetSessionTokenTrait;
    use GetWebIdentityToken\GetWebIdentityTokenTrait;
}
