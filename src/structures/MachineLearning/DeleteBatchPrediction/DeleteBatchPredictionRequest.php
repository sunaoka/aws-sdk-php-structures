<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteBatchPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BatchPredictionId
 */
class DeleteBatchPredictionRequest extends Request
{
    /**
     * @param array{BatchPredictionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
