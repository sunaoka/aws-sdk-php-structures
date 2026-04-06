<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchContactsTimeRange|null $TimeRange
 * @property SearchContactsTimestampCondition|null $TimestampCondition
 */
class SearchContactsAdditionalTimeRangeCriteria extends Shape
{
    /**
     * @param array{
     *     TimeRange?: SearchContactsTimeRange|null,
     *     TimestampCondition?: SearchContactsTimestampCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
