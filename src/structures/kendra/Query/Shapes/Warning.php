<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'QUERY_LANGUAGE_INVALID_SYNTAX'|null $Code
 */
class Warning extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Code?: 'QUERY_LANGUAGE_INVALID_SYNTAX'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
