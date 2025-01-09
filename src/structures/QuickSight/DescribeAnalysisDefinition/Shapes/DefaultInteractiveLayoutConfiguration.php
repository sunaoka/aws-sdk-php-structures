<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultGridLayoutConfiguration $Grid
 * @property DefaultFreeFormLayoutConfiguration $FreeForm
 */
class DefaultInteractiveLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Grid?: DefaultGridLayoutConfiguration,
     *     FreeForm?: DefaultFreeFormLayoutConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
