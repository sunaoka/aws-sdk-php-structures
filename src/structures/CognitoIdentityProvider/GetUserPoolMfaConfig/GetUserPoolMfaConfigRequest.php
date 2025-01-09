<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolMfaConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class GetUserPoolMfaConfigRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
