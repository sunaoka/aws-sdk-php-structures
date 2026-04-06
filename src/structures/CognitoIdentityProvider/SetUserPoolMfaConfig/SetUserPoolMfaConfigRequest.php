<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\SmsMfaConfigType|null $SmsMfaConfiguration
 * @property Shapes\SoftwareTokenMfaConfigType|null $SoftwareTokenMfaConfiguration
 * @property 'OFF'|'ON'|'OPTIONAL'|null $MfaConfiguration
 */
class SetUserPoolMfaConfigRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     SmsMfaConfiguration?: Shapes\SmsMfaConfigType|null,
     *     SoftwareTokenMfaConfiguration?: Shapes\SoftwareTokenMfaConfigType|null,
     *     MfaConfiguration?: 'OFF'|'ON'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
