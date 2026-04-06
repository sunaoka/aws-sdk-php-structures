<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property string|null $schema
 */
class TableMember extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     schema?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
