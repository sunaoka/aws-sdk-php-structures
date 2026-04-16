<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserMFAPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SMSMfaSettingsType|null $SMSMfaSettings
 * @property Shapes\SoftwareTokenMfaSettingsType|null $SoftwareTokenMfaSettings
 * @property Shapes\EmailMfaSettingsType|null $EmailMfaSettings
 * @property Shapes\WebAuthnMfaSettingsType|null $WebAuthnMfaSettings
 * @property string $AccessToken
 */
class SetUserMFAPreferenceRequest extends Request
{
    /**
     * @param array{
     *     SMSMfaSettings?: Shapes\SMSMfaSettingsType|null,
     *     SoftwareTokenMfaSettings?: Shapes\SoftwareTokenMfaSettingsType|null,
     *     EmailMfaSettings?: Shapes\EmailMfaSettingsType|null,
     *     WebAuthnMfaSettings?: Shapes\WebAuthnMfaSettingsType|null,
     *     AccessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
