<?php

namespace Sunaoka\Aws\Structures\Wickr\RegisterOidcConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationName
 * @property string|null $clientId
 * @property string $companyId
 * @property string $scopes
 * @property string $issuer
 * @property string|null $clientSecret
 * @property string|null $secret
 * @property string|null $redirectUrl
 * @property string|null $userId
 * @property string|null $customUsername
 * @property string|null $caCertificate
 * @property int<1, 10>|null $applicationId
 * @property int|null $ssoTokenBufferMinutes
 * @property string|null $extraAuthParams
 */
class RegisterOidcConfigResponse extends Response
{
}
