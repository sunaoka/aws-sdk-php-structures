<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $schema
 * @property string $type
 */
class TableMember extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     schema?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
