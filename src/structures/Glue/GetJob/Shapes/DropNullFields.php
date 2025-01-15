<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property NullCheckBoxList|null $NullCheckBoxList
 * @property list<NullValueField>|null $NullTextList
 */
class DropNullFields extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     NullCheckBoxList?: NullCheckBoxList|null,
     *     NullTextList?: list<NullValueField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
