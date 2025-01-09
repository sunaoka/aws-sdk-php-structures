<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCK'|'NO_ACTION' $EventAction
 */
class CompromisedCredentialsActionsType extends Shape
{
    /**
     * @param array{EventAction: 'BLOCK'|'NO_ACTION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
