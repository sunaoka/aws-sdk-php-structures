<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUserAuthFactors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Username
 * @property string|null $PreferredMfaSetting
 * @property list<string>|null $UserMFASettingList
 * @property list<'PASSWORD'|'EMAIL_OTP'|'SMS_OTP'|'WEB_AUTHN'|'SOFTWARE_TOKEN'>|null $ConfiguredUserAuthFactors
 */
class AdminGetUserAuthFactorsResponse extends Response
{
}
