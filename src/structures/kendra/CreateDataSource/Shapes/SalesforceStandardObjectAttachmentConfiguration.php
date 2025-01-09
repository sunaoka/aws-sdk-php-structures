<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class SalesforceStandardObjectAttachmentConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentTitleFieldName?: string,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
