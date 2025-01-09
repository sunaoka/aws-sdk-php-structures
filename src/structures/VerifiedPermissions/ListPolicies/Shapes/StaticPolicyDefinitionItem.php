<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 */
class StaticPolicyDefinitionItem extends Shape
{
    /**
     * @param array{description?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
