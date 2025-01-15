<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CrawlAttachments
 * @property list<string>|null $IncludeAttachmentFilePatterns
 * @property list<string>|null $ExcludeAttachmentFilePatterns
 * @property string $DocumentDataFieldName
 * @property string|null $DocumentTitleFieldName
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class ServiceNowServiceCatalogConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlAttachments?: bool|null,
     *     IncludeAttachmentFilePatterns?: list<string>|null,
     *     ExcludeAttachmentFilePatterns?: list<string>|null,
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
