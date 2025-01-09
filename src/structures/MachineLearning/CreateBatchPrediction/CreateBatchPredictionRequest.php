<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateBatchPrediction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BatchPredictionId
 * @property string $BatchPredictionName
 * @property string $MLModelId
 * @property string $BatchPredictionDataSourceId
 * @property string $OutputUri
 */
class CreateBatchPredictionRequest extends Request
{
    /**
     * @param array{
     *     BatchPredictionId: string,
     *     BatchPredictionName?: string,
     *     MLModelId: string,
     *     BatchPredictionDataSourceId: string,
     *     OutputUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
