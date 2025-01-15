<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateStaticPolicyDefinition|null $static
 */
class UpdatePolicyDefinition extends Shape
{
    /**
     * @param array{static?: UpdateStaticPolicyDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
