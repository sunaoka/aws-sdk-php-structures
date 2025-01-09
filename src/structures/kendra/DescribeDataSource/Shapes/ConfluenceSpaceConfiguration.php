<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CrawlPersonalSpaces
 * @property bool $CrawlArchivedSpaces
 * @property list<string> $IncludeSpaces
 * @property list<string> $ExcludeSpaces
 * @property list<ConfluenceSpaceToIndexFieldMapping> $SpaceFieldMappings
 */
class ConfluenceSpaceConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlPersonalSpaces?: bool,
     *     CrawlArchivedSpaces?: bool,
     *     IncludeSpaces?: list<string>,
     *     ExcludeSpaces?: list<string>,
     *     SpaceFieldMappings?: list<ConfluenceSpaceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
