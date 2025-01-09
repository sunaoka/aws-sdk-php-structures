<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'xgboost'|'linear-learner'|'mlp'|'lightgbm'|'catboost'|'randomforest'|'extra-trees'|'nn-torch'|'fastai'|'cnn-qr'|'deepar'|'prophet'|'npts'|'arima'|'ets'> $AutoMLAlgorithms
 */
class AutoMLAlgorithmConfig extends Shape
{
    /**
     * @param array{AutoMLAlgorithms: list<'xgboost'|'linear-learner'|'mlp'|'lightgbm'|'catboost'|'randomforest'|'extra-trees'|'nn-torch'|'fastai'|'cnn-qr'|'deepar'|'prophet'|'npts'|'arima'|'ets'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
