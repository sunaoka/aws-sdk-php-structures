<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHOR'|'CONTENT_STATUS'|'CREATED_DATE'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'MODIFIED_DATE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION'|null $DataSourceFieldName
 * @property string|null $DateFieldFormat
 * @property string|null $IndexFieldName
 */
class ConfluencePageToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'AUTHOR'|'CONTENT_STATUS'|'CREATED_DATE'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'MODIFIED_DATE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION'|null,
     *     DateFieldFormat?: string|null,
     *     IndexFieldName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
