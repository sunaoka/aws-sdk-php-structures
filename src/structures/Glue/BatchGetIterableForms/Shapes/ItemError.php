<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetIterableForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ItemIdentifier
 * @property string|null $Code
 * @property string|null $Message
 */
class ItemError extends Shape
{
    /**
     * @param array{
     *     ItemIdentifier?: string|null,
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
