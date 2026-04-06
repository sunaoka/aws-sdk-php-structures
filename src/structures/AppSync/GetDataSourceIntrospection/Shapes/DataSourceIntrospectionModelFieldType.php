<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kind
 * @property string|null $name
 * @property DataSourceIntrospectionModelFieldType|null $type
 * @property list<string>|null $values
 */
class DataSourceIntrospectionModelFieldType extends Shape
{
    /**
     * @param array{
     *     kind?: string|null,
     *     name?: string|null,
     *     type?: DataSourceIntrospectionModelFieldType|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
