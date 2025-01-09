<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrokClassifier $GrokClassifier
 * @property XMLClassifier $XMLClassifier
 * @property JsonClassifier $JsonClassifier
 * @property CsvClassifier $CsvClassifier
 */
class Classifier extends Shape
{
    /**
     * @param array{
     *     GrokClassifier?: GrokClassifier,
     *     XMLClassifier?: XMLClassifier,
     *     JsonClassifier?: JsonClassifier,
     *     CsvClassifier?: CsvClassifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
