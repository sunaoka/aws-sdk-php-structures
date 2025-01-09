<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAuthFactors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property string $PreferredMfaSetting
 * @property list<string> $UserMFASettingList
 * @property list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'> $ConfiguredUserAuthFactors
 */
class GetUserAuthFactorsResponse extends Response
{
}
