<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CrawlAttachments
 * @property list<string> $IncludeAttachmentFilePatterns
 * @property list<string> $ExcludeAttachmentFilePatterns
 * @property string $DocumentDataFieldName
 * @property string $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class ServiceNowServiceCatalogConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlAttachments?: bool,
     *     IncludeAttachmentFilePatterns?: list<string>,
     *     ExcludeAttachmentFilePatterns?: list<string>,
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
