<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 */
class EmailHeader extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
