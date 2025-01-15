<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property list<string>|null $EventCategories
 */
class EventCategoryGroup extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     EventCategories?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
