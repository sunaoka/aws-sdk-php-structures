<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Accuracy
 * @property double|null $Precision
 * @property double|null $Recall
 * @property double|null $F1Score
 * @property double|null $MicroPrecision
 * @property double|null $MicroRecall
 * @property double|null $MicroF1Score
 * @property double|null $HammingLoss
 */
class ClassifierEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     Accuracy?: double|null,
     *     Precision?: double|null,
     *     Recall?: double|null,
     *     F1Score?: double|null,
     *     MicroPrecision?: double|null,
     *     MicroRecall?: double|null,
     *     MicroF1Score?: double|null,
     *     HammingLoss?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
