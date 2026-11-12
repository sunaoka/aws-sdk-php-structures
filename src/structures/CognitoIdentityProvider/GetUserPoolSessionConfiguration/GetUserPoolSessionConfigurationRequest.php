<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolSessionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class GetUserPoolSessionConfigurationRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
