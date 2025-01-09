<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NullString
 */
class NullValueFormatConfiguration extends Shape
{
    /**
     * @param array{NullString: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
