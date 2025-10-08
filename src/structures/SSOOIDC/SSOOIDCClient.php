<?php

namespace Sunaoka\Aws\Structures\SSOOIDC;

class SSOOIDCClient extends \Aws\SSOOIDC\SSOOIDCClient
{
    use CreateToken\CreateTokenTrait;
    use CreateTokenWithIAM\CreateTokenWithIAMTrait;
    use RegisterClient\RegisterClientTrait;
    use StartDeviceAuthorization\StartDeviceAuthorizationTrait;
}
