<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<DataSourceIntrospectionModelField> $fields
 * @property DataSourceIntrospectionModelIndex $primaryKey
 * @property list<DataSourceIntrospectionModelIndex> $indexes
 * @property string $sdl
 */
class DataSourceIntrospectionModel extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     fields?: list<DataSourceIntrospectionModelField>,
     *     primaryKey?: DataSourceIntrospectionModelIndex,
     *     indexes?: list<DataSourceIntrospectionModelIndex>,
     *     sdl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
