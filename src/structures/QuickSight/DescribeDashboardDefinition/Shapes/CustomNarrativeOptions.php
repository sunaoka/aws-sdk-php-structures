<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Narrative
 */
class CustomNarrativeOptions extends Shape
{
    /**
     * @param array{Narrative: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
