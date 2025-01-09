<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSourceIntrospection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSourceIntrospectionModel> $models
 * @property string $nextToken
 */
class DataSourceIntrospectionResult extends Shape
{
    /**
     * @param array{
     *     models?: list<DataSourceIntrospectionModel>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
