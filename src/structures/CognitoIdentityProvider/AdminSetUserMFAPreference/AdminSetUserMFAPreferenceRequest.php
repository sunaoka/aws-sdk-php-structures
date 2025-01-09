<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SMSMfaSettingsType $SMSMfaSettings
 * @property Shapes\SoftwareTokenMfaSettingsType $SoftwareTokenMfaSettings
 * @property Shapes\EmailMfaSettingsType $EmailMfaSettings
 * @property string $Username
 * @property string $UserPoolId
 */
class AdminSetUserMFAPreferenceRequest extends Request
{
    /**
     * @param array{
     *     SMSMfaSettings?: Shapes\SMSMfaSettingsType,
     *     SoftwareTokenMfaSettings?: Shapes\SoftwareTokenMfaSettingsType,
     *     EmailMfaSettings?: Shapes\EmailMfaSettingsType,
     *     Username: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
