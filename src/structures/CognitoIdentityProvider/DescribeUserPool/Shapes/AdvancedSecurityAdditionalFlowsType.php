<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUDIT'|'ENFORCED'|null $CustomAuthMode
 */
class AdvancedSecurityAdditionalFlowsType extends Shape
{
    /**
     * @param array{CustomAuthMode?: 'AUDIT'|'ENFORCED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
