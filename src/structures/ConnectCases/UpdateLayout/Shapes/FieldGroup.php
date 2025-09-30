<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<FieldItem> $fields
 */
class FieldGroup extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     fields: list<FieldItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
