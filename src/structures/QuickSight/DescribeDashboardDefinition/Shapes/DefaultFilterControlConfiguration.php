<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property DefaultFilterControlOptions $ControlOptions
 */
class DefaultFilterControlConfiguration extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     ControlOptions: DefaultFilterControlOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
