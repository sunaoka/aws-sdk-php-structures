<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CascadingControlSource>|null $SourceControls
 */
class CascadingControlConfiguration extends Shape
{
    /**
     * @param array{SourceControls?: list<CascadingControlSource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
