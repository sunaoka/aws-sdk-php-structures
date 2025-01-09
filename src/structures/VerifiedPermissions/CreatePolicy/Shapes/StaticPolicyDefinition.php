<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $statement
 */
class StaticPolicyDefinition extends Shape
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
