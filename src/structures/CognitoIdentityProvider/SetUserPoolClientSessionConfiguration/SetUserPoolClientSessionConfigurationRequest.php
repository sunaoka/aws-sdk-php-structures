<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolClientSessionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property Shapes\ClientSSOSessionConfigType $SSOSession
 */
class SetUserPoolClientSessionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     SSOSession: Shapes\ClientSSOSessionConfigType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
