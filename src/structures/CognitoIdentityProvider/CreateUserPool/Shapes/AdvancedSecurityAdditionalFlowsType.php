<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUDIT'|'ENFORCED' $CustomAuthMode
 */
class AdvancedSecurityAdditionalFlowsType extends Shape
{
    /**
     * @param array{CustomAuthMode?: 'AUDIT'|'ENFORCED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
