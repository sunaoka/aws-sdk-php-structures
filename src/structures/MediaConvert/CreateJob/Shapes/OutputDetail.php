<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInMs
 * @property VideoDetail $VideoDetails
 */
class OutputDetail extends Shape
{
    /**
     * @param array{
     *     DurationInMs?: int,
     *     VideoDetails?: VideoDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
