<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $Description
 * @property string|null $Name
 * @property list<string>|null $ValidValues
 */
class TablePropertyDescription extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     Description?: string|null,
     *     Name?: string|null,
     *     ValidValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
