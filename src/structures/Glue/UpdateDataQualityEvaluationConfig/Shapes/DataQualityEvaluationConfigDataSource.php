<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataQualityEvaluationConfigGlueTables|null $GlueTables
 */
class DataQualityEvaluationConfigDataSource extends Shape
{
    /**
     * @param array{GlueTables?: DataQualityEvaluationConfigGlueTables|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
