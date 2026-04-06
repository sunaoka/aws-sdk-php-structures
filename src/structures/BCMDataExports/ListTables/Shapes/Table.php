<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $TableName
 * @property list<TablePropertyDescription>|null $TableProperties
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     TableName?: string|null,
     *     TableProperties?: list<TablePropertyDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
