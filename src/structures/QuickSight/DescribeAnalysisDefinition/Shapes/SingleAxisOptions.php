<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property YAxisOptions|null $YAxisOptions
 */
class SingleAxisOptions extends Shape
{
    /**
     * @param array{YAxisOptions?: YAxisOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
