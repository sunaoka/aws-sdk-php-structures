<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSourceIntrospectionModel>|null $models
 * @property string|null $nextToken
 */
class DataSourceIntrospectionResult extends Shape
{
    /**
     * @param array{
     *     models?: list<DataSourceIntrospectionModel>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
