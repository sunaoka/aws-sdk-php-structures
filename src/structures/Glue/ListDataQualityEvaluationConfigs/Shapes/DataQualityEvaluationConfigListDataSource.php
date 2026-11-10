<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityEvaluationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataQualityEvaluationConfigListGlueTables|null $GlueTables
 */
class DataQualityEvaluationConfigListDataSource extends Shape
{
    /**
     * @param array{GlueTables?: DataQualityEvaluationConfigListGlueTables|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
