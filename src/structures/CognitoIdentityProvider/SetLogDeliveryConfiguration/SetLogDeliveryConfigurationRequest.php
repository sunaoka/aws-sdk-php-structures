<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property list<Shapes\LogConfigurationType> $LogConfigurations
 */
class SetLogDeliveryConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     LogConfigurations: list<Shapes\LogConfigurationType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
