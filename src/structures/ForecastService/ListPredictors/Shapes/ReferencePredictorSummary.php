<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListPredictors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'Active'|'Deleted'|null $State
 */
class ReferencePredictorSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     State?: 'Active'|'Deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
