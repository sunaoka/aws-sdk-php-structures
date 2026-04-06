<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetSheetId
 */
class LocalNavigationConfiguration extends Shape
{
    /**
     * @param array{TargetSheetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
