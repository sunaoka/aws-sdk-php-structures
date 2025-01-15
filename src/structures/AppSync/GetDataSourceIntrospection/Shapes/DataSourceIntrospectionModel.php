<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<DataSourceIntrospectionModelField>|null $fields
 * @property DataSourceIntrospectionModelIndex|null $primaryKey
 * @property list<DataSourceIntrospectionModelIndex>|null $indexes
 * @property string|null $sdl
 */
class DataSourceIntrospectionModel extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     fields?: list<DataSourceIntrospectionModelField>|null,
     *     primaryKey?: DataSourceIntrospectionModelIndex|null,
     *     indexes?: list<DataSourceIntrospectionModelIndex>|null,
     *     sdl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
