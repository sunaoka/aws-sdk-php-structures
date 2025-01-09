<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'Active'|'Deleted' $State
 */
class ReferencePredictorSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     State?: 'Active'|'Deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
