<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Accuracy
 * @property double $Precision
 * @property double $Recall
 * @property double $F1Score
 * @property double $MicroPrecision
 * @property double $MicroRecall
 * @property double $MicroF1Score
 * @property double $HammingLoss
 */
class ClassifierEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     Accuracy?: double,
     *     Precision?: double,
     *     Recall?: double,
     *     F1Score?: double,
     *     MicroPrecision?: double,
     *     MicroRecall?: double,
     *     MicroF1Score?: double,
     *     HammingLoss?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
