<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'xgboost'|'linear-learner'|'mlp'|'lightgbm'|'catboost'|'randomforest'|'extra-trees'|'nn-torch'|'fastai'> $AutoMLAlgorithms
 */
class AutoMLAlgorithmConfig extends Shape
{
    /**
     * @param array{AutoMLAlgorithms: list<'xgboost'|'linear-learner'|'mlp'|'lightgbm'|'catboost'|'randomforest'|'extra-trees'|'nn-torch'|'fastai'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
