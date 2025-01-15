<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountTakeoverActionType|null $LowAction
 * @property AccountTakeoverActionType|null $MediumAction
 * @property AccountTakeoverActionType|null $HighAction
 */
class AccountTakeoverActionsType extends Shape
{
    /**
     * @param array{
     *     LowAction?: AccountTakeoverActionType|null,
     *     MediumAction?: AccountTakeoverActionType|null,
     *     HighAction?: AccountTakeoverActionType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
