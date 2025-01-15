<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property list<EventInfoMap>|null $Events
 */
class EventCategoriesMap extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     Events?: list<EventInfoMap>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
