<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CrawlPersonalSpaces
 * @property bool|null $CrawlArchivedSpaces
 * @property list<string>|null $IncludeSpaces
 * @property list<string>|null $ExcludeSpaces
 * @property list<ConfluenceSpaceToIndexFieldMapping>|null $SpaceFieldMappings
 */
class ConfluenceSpaceConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlPersonalSpaces?: bool|null,
     *     CrawlArchivedSpaces?: bool|null,
     *     IncludeSpaces?: list<string>|null,
     *     ExcludeSpaces?: list<string>|null,
     *     SpaceFieldMappings?: list<ConfluenceSpaceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
