<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountTakeoverActionType $LowAction
 * @property AccountTakeoverActionType $MediumAction
 * @property AccountTakeoverActionType $HighAction
 */
class AccountTakeoverActionsType extends Shape
{
    /**
     * @param array{
     *     LowAction?: AccountTakeoverActionType,
     *     MediumAction?: AccountTakeoverActionType,
     *     HighAction?: AccountTakeoverActionType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
