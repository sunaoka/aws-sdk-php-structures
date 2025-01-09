<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $statement
 */
class UpdateStaticPolicyDefinition extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     statement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
