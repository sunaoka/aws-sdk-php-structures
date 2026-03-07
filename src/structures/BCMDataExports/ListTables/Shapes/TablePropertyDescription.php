<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $ValidValues
 * @property string|null $DefaultValue
 * @property string|null $Description
 */
class TablePropertyDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ValidValues?: list<string>|null,
     *     DefaultValue?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
