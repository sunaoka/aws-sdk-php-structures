<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Code
 * @property int $Count
 */
class WarningGroup extends Shape
{
    /**
     * @param array{
     *     Code: int,
     *     Count: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
