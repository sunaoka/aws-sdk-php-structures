<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISPLAY_URL'|'ITEM_TYPE'|'SPACE_KEY'|'URL'|null $DataSourceFieldName
 * @property string|null $DateFieldFormat
 * @property string|null $IndexFieldName
 */
class ConfluenceSpaceToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'DISPLAY_URL'|'ITEM_TYPE'|'SPACE_KEY'|'URL'|null,
     *     DateFieldFormat?: string|null,
     *     IndexFieldName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
