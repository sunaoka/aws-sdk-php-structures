<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateStaticPolicyDefinition $static
 */
class UpdatePolicyDefinition extends Shape
{
    /**
     * @param array{static?: UpdateStaticPolicyDefinition} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
