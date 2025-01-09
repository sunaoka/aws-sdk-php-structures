<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'STRICT' $mode
 */
class ValidationSettings extends Shape
{
    /**
     * @param array{mode: 'OFF'|'STRICT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
