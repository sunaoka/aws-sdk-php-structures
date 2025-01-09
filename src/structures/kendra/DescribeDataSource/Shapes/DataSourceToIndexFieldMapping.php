<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceFieldName
 * @property string $DateFieldFormat
 * @property string $IndexFieldName
 */
class DataSourceToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName: string,
     *     DateFieldFormat?: string,
     *     IndexFieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
