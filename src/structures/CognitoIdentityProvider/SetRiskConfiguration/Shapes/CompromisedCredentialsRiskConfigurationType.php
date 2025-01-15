<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SIGN_IN'|'PASSWORD_CHANGE'|'SIGN_UP'>|null $EventFilter
 * @property CompromisedCredentialsActionsType $Actions
 */
class CompromisedCredentialsRiskConfigurationType extends Shape
{
    /**
     * @param array{
     *     EventFilter?: list<'SIGN_IN'|'PASSWORD_CHANGE'|'SIGN_UP'>|null,
     *     Actions: CompromisedCredentialsActionsType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
