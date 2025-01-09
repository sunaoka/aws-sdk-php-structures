<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kind
 * @property string $name
 * @property DataSourceIntrospectionModelFieldType $type
 * @property list<string> $values
 */
class DataSourceIntrospectionModelFieldType extends Shape
{
    /**
     * @param array{
     *     kind?: string,
     *     name?: string,
     *     type?: DataSourceIntrospectionModelFieldType,
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
