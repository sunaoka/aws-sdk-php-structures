<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property 'QUERY_LANGUAGE_INVALID_SYNTAX' $Code
 */
class Warning extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Code?: 'QUERY_LANGUAGE_INVALID_SYNTAX'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
