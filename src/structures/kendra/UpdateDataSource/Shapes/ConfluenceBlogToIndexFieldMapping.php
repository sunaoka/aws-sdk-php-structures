<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHOR'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'PUBLISH_DATE'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION' $DataSourceFieldName
 * @property string $DateFieldFormat
 * @property string $IndexFieldName
 */
class ConfluenceBlogToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'AUTHOR'|'DISPLAY_URL'|'ITEM_TYPE'|'LABELS'|'PUBLISH_DATE'|'SPACE_KEY'|'SPACE_NAME'|'URL'|'VERSION',
     *     DateFieldFormat?: string,
     *     IndexFieldName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
