<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserMFAPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SMSMfaSettingsType $SMSMfaSettings
 * @property Shapes\SoftwareTokenMfaSettingsType $SoftwareTokenMfaSettings
 * @property Shapes\EmailMfaSettingsType $EmailMfaSettings
 * @property string $AccessToken
 */
class SetUserMFAPreferenceRequest extends Request
{
    /**
     * @param array{
     *     SMSMfaSettings?: Shapes\SMSMfaSettingsType,
     *     SoftwareTokenMfaSettings?: Shapes\SoftwareTokenMfaSettingsType,
     *     EmailMfaSettings?: Shapes\EmailMfaSettingsType,
     *     AccessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
