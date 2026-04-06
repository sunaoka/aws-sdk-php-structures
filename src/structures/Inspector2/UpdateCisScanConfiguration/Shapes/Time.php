<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timeOfDay
 * @property string $timezone
 */
class Time extends Shape
{
    /**
     * @param array{
     *     timeOfDay: string,
     *     timezone: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
