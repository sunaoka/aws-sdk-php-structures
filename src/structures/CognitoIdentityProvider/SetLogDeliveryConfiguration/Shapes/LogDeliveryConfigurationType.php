<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property list<LogConfigurationType> $LogConfigurations
 */
class LogDeliveryConfigurationType extends Shape
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     LogConfigurations: list<LogConfigurationType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
