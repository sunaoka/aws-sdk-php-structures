<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceFieldName
 * @property string|null $DateFieldFormat
 * @property string $IndexFieldName
 */
class DataSourceToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName: string,
     *     DateFieldFormat?: string|null,
     *     IndexFieldName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
