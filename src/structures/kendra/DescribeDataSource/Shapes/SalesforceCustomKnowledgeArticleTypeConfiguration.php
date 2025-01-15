<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DocumentDataFieldName
 * @property string|null $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class SalesforceCustomKnowledgeArticleTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
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
