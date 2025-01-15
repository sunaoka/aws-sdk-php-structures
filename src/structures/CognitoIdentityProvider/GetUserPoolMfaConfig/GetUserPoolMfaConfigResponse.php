<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SmsMfaConfigType|null $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType|null $SoftwareTokenMfaConfiguration
 * @property Shapes\EmailMfaConfigType|null $EmailMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 * @property Shapes\WebAuthnConfigurationType|null $WebAuthnConfiguration
 */
class GetUserPoolMfaConfigResponse extends Response
{
}
