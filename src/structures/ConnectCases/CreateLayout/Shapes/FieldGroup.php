<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldItem> $fields
 * @property string|null $name
 */
class FieldGroup extends Shape
{
    /**
     * @param array{
     *     fields: list<FieldItem>,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
