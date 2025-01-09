<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NotifyConfigurationType $NotifyConfiguration
 * @property AccountTakeoverActionsType $Actions
 */
class AccountTakeoverRiskConfigurationType extends Shape
{
    /**
     * @param array{
     *     NotifyConfiguration?: NotifyConfigurationType,
     *     Actions: AccountTakeoverActionsType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
