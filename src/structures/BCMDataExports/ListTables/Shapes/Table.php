<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property string|null $Description
 * @property list<TablePropertyDescription>|null $TableProperties
 */
class Table extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     Description?: string|null,
     *     TableProperties?: list<TablePropertyDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
