<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property NullCheckBoxList $NullCheckBoxList
 * @property list<NullValueField> $NullTextList
 */
class DropNullFields extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     NullCheckBoxList?: NullCheckBoxList,
     *     NullTextList?: list<NullValueField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
