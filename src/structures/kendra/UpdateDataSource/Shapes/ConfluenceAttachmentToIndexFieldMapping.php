<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHOR'|'CONTENT_TYPE'|'CREATED_DATE'|'DISPLAY_URL'|'FILE_SIZE'|'ITEM_TYPE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION' $DataSourceFieldName
 * @property string $DateFieldFormat
 * @property string $IndexFieldName
 */
class ConfluenceAttachmentToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'AUTHOR'|'CONTENT_TYPE'|'CREATED_DATE'|'DISPLAY_URL'|'FILE_SIZE'|'ITEM_TYPE'|'PARENT_ID'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION',
     *     DateFieldFormat?: string,
     *     IndexFieldName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
