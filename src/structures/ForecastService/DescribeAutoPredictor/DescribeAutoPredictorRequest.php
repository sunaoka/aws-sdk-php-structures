<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorArn
 */
class DescribeAutoPredictorRequest extends Request
{
    /**
     * @param array{PredictorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
