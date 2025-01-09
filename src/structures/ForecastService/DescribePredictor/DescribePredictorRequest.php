<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorArn
 */
class DescribePredictorRequest extends Request
{
    /**
     * @param array{PredictorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
