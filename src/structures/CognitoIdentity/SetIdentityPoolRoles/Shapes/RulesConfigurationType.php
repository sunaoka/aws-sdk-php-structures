<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetIdentityPoolRoles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MappingRule> $Rules
 */
class RulesConfigurationType extends Shape
{
    /**
     * @param array{Rules: list<MappingRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
