<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SmsMfaConfigType $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType $SoftwareTokenMfaConfiguration
 * @property Shapes\EmailMfaConfigType $EmailMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL' $MfaConfiguration
 * @property Shapes\WebAuthnConfigurationType $WebAuthnConfiguration
 */
class GetUserPoolMfaConfigResponse extends Response
{
}
