<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\SmsMfaConfigType $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType $SoftwareTokenMfaConfiguration
 * @property Shapes\EmailMfaConfigType $EmailMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL' $MfaConfiguration
 * @property Shapes\WebAuthnConfigurationType $WebAuthnConfiguration
 */
class SetUserPoolMfaConfigRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     SmsMfaConfiguration?: Shapes\SmsMfaConfigType,
     *     SoftwareTokenMfaConfiguration?: Shapes\SoftwareTokenMfaConfigType,
     *     EmailMfaConfiguration?: Shapes\EmailMfaConfigType,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL',
     *     WebAuthnConfiguration?: Shapes\WebAuthnConfigurationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
