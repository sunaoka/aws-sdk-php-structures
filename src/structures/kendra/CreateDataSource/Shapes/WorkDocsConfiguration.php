<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationId
 * @property bool|null $CrawlComments
 * @property bool|null $UseChangeLog
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class WorkDocsConfiguration extends Shape
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     CrawlComments?: bool|null,
     *     UseChangeLog?: bool|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
