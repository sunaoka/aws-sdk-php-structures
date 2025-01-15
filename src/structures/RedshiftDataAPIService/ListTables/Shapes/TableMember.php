<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $schema
 * @property string|null $type
 */
class TableMember extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     schema?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
