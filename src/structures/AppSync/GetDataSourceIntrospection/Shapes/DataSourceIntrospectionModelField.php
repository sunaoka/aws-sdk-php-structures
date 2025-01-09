<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DataSourceIntrospectionModelFieldType $type
 * @property int $length
 */
class DataSourceIntrospectionModelField extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     type?: DataSourceIntrospectionModelFieldType,
     *     length?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
