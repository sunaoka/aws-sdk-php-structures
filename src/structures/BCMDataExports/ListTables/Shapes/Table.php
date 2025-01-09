<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $TableName
 * @property list<TablePropertyDescription> $TableProperties
 */
class Table extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     TableName?: string,
     *     TableProperties?: list<TablePropertyDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
