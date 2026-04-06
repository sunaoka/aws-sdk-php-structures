<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteSigningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SigningRule> $rules
 */
class SigningConfiguration extends Shape
{
    /**
     * @param array{rules: list<SigningRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
