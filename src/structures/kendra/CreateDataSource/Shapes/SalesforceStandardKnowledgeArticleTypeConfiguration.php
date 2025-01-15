<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentDataFieldName
 * @property string|null $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class SalesforceStandardKnowledgeArticleTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
