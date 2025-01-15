<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\SmsMfaConfigType|null $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType|null $SoftwareTokenMfaConfiguration
 * @property Shapes\EmailMfaConfigType|null $EmailMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 * @property Shapes\WebAuthnConfigurationType|null $WebAuthnConfiguration
 */
class SetUserPoolMfaConfigRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     SmsMfaConfiguration?: Shapes\SmsMfaConfigType|null,
     *     SoftwareTokenMfaConfiguration?: Shapes\SoftwareTokenMfaConfigType|null,
     *     EmailMfaConfiguration?: Shapes\EmailMfaConfigType|null,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL'|null,
     *     WebAuthnConfiguration?: Shapes\WebAuthnConfigurationType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
