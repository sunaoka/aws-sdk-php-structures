<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHOR'|'CONTENT_STATUS'|'CREATED_DATE'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'MODIFIED_DATE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION' $DataSourceFieldName
 * @property string $DateFieldFormat
 * @property string $IndexFieldName
 */
class ConfluencePageToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'AUTHOR'|'CONTENT_STATUS'|'CREATED_DATE'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'MODIFIED_DATE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION',
     *     DateFieldFormat?: string,
     *     IndexFieldName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
