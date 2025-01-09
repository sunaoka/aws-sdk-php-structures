<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsPubliclyAccessible
 */
class IngressConfiguration extends Shape
{
    /**
     * @param array{IsPubliclyAccessible?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
