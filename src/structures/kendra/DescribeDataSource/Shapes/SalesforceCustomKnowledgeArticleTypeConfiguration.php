<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DocumentDataFieldName
 * @property string $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class SalesforceCustomKnowledgeArticleTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentDataFieldName: string,
     *     DocumentTitleFieldName?: string,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
