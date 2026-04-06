<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Contribution
 */
class RootCauseImpact extends Shape
{
    /**
     * @param array{Contribution: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
