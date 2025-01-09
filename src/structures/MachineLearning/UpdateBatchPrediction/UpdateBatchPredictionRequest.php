<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateBatchPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BatchPredictionId
 * @property string $BatchPredictionName
 */
class UpdateBatchPredictionRequest extends Request
{
    /**
     * @param array{
     *     BatchPredictionId: string,
     *     BatchPredictionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
