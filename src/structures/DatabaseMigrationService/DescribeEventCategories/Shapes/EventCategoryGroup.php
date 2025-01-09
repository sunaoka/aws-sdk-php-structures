<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property list<string> $EventCategories
 */
class EventCategoryGroup extends Shape
{
    /**
     * @param array{
     *     SourceType?: string,
     *     EventCategories?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
