<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstanceAccessControlAttributeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Source
 */
class AccessControlAttributeValue extends Shape
{
    /**
     * @param array{Source: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
