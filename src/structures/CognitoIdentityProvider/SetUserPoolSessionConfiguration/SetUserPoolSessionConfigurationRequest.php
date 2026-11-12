<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolSessionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property 'ENABLED'|'DISABLED' $UserSessionTracking
 * @property Shapes\UserPoolTokenSessionConfigType $TokenSession
 */
class SetUserPoolSessionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     UserSessionTracking: 'ENABLED'|'DISABLED',
     *     TokenSession: Shapes\UserPoolTokenSessionConfigType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
