<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $statement
 */
class StaticPolicyDefinitionDetail extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     statement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
