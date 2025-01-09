<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\StartDeviceAuthorization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $deviceCode
 * @property string $userCode
 * @property string $verificationUri
 * @property string $verificationUriComplete
 * @property int $expiresIn
 * @property int $interval
 */
class StartDeviceAuthorizationResponse extends Response
{
}
