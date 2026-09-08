<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectRetention\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Days
 * @property int|null $Years
 */
class EventHoldDuration extends Shape
{
    /**
     * @param array{
     *     Days?: int|null,
     *     Years?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
