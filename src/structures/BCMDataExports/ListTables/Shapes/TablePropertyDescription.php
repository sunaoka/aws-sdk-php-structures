<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $Description
 * @property string $Name
 * @property list<string> $ValidValues
 */
class TablePropertyDescription extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     Description?: string,
     *     Name?: string,
     *     ValidValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
