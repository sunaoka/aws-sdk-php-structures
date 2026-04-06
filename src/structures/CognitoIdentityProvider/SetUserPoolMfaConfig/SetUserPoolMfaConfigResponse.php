<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SmsMfaConfigType|null $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType|null $SoftwareTokenMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 */
class SetUserPoolMfaConfigResponse extends Response
{
}
