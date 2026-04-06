<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAuthFactors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property string|null $PreferredMfaSetting
 * @property list<string>|null $UserMFASettingList
 * @property list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'>|null $ConfiguredUserAuthFactors
 */
class GetUserAuthFactorsResponse extends Response
{
}
