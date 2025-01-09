<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationId
 * @property bool $CrawlComments
 * @property bool $UseChangeLog
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class WorkDocsConfiguration extends Shape
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     CrawlComments?: bool,
     *     UseChangeLog?: bool,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
