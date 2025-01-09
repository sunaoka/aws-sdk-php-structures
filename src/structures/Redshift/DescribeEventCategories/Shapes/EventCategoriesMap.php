<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property list<EventInfoMap> $Events
 */
class EventCategoriesMap extends Shape
{
    /**
     * @param array{
     *     SourceType?: string,
     *     Events?: list<EventInfoMap>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
