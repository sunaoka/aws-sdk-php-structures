<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MaxScore
 * @property double $CurrentScore
 */
class AnomalyScore extends Shape
{
    /**
     * @param array{
     *     MaxScore: double,
     *     CurrentScore: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
