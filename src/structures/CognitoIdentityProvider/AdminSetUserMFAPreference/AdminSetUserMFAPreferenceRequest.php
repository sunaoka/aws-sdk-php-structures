<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SMSMfaSettingsType|null $SMSMfaSettings
 * @property Shapes\SoftwareTokenMfaSettingsType|null $SoftwareTokenMfaSettings
 * @property string $Username
 * @property string $UserPoolId
 */
class AdminSetUserMFAPreferenceRequest extends Request
{
    /**
     * @param array{
     *     SMSMfaSettings?: Shapes\SMSMfaSettingsType|null,
     *     SoftwareTokenMfaSettings?: Shapes\SoftwareTokenMfaSettingsType|null,
     *     Username: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
