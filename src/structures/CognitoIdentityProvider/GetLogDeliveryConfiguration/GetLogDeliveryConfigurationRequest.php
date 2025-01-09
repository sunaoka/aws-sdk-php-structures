<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetLogDeliveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class GetLogDeliveryConfigurationRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
