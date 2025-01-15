<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrokClassifier|null $GrokClassifier
 * @property XMLClassifier|null $XMLClassifier
 * @property JsonClassifier|null $JsonClassifier
 * @property CsvClassifier|null $CsvClassifier
 */
class Classifier extends Shape
{
    /**
     * @param array{
     *     GrokClassifier?: GrokClassifier|null,
     *     XMLClassifier?: XMLClassifier|null,
     *     JsonClassifier?: JsonClassifier|null,
     *     CsvClassifier?: CsvClassifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
