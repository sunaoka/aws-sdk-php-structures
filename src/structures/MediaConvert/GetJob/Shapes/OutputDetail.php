<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DurationInMs
 * @property VideoDetail|null $VideoDetails
 */
class OutputDetail extends Shape
{
    /**
     * @param array{
     *     DurationInMs?: int|null,
     *     VideoDetails?: VideoDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
