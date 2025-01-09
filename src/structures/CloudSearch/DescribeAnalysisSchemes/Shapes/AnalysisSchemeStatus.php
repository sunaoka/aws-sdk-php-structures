<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeAnalysisSchemes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalysisScheme $Options
 * @property OptionStatus $Status
 */
class AnalysisSchemeStatus extends Shape
{
    /**
     * @param array{
     *     Options: AnalysisScheme,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
