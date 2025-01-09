<?php

namespace Sunaoka\Aws\Structures\Connect\SearchHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string $TagValue
 */
class TagCondition extends Shape
{
    /**
     * @param array{
     *     TagKey?: string,
     *     TagValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
