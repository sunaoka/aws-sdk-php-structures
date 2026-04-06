<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property DataSourceIntrospectionModelFieldType|null $type
 * @property int|null $length
 */
class DataSourceIntrospectionModelField extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: DataSourceIntrospectionModelFieldType|null,
     *     length?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
