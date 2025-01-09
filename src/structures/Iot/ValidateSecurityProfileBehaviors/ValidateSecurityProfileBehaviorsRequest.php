<?php

namespace Sunaoka\Aws\Structures\Iot\ValidateSecurityProfileBehaviors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Behavior> $behaviors
 */
class ValidateSecurityProfileBehaviorsRequest extends Request
{
    /**
     * @param array{behaviors: list<Shapes\Behavior>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
