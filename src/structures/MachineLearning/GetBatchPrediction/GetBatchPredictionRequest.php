<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetBatchPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BatchPredictionId
 */
class GetBatchPredictionRequest extends Request
{
    /**
     * @param array{BatchPredictionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
