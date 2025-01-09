<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstanceAccessControlAttributeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccessControlAttribute> $AccessControlAttributes
 */
class InstanceAccessControlAttributeConfiguration extends Shape
{
    /**
     * @param array{AccessControlAttributes: list<AccessControlAttribute>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
