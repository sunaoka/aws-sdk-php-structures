<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\StartDeviceAuthorization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $deviceCode
 * @property string|null $userCode
 * @property string|null $verificationUri
 * @property string|null $verificationUriComplete
 * @property int|null $expiresIn
 * @property int|null $interval
 */
class StartDeviceAuthorizationResponse extends Response
{
}
