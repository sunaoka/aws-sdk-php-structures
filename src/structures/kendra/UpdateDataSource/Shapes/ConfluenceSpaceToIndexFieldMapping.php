<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISPLAY_URL'|'ITEM_TYPE'|'SPACE_KEY'|'URL' $DataSourceFieldName
 * @property string $DateFieldFormat
 * @property string $IndexFieldName
 */
class ConfluenceSpaceToIndexFieldMapping extends Shape
{
    /**
     * @param array{
     *     DataSourceFieldName?: 'DISPLAY_URL'|'ITEM_TYPE'|'SPACE_KEY'|'URL',
     *     DateFieldFormat?: string,
     *     IndexFieldName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
