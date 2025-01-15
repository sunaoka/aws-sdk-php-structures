<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsPubliclyAccessible
 */
class IngressConfiguration extends Shape
{
    /**
     * @param array{IsPubliclyAccessible?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
