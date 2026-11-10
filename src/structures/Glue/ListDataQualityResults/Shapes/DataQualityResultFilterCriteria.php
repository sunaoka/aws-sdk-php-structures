<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource|null $DataSource
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property \Aws\Api\DateTimeResult|null $StartedAfter
 * @property \Aws\Api\DateTimeResult|null $StartedBefore
 * @property 'ON_DEMAND'|'EVALUATION_CONFIG'|null $EvaluationRunMode
 * @property string|null $DataQualityEvaluationConfig
 */
class DataQualityResultFilterCriteria extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource|null,
     *     JobName?: string|null,
     *     JobRunId?: string|null,
     *     StartedAfter?: \Aws\Api\DateTimeResult|null,
     *     StartedBefore?: \Aws\Api\DateTimeResult|null,
     *     EvaluationRunMode?: 'ON_DEMAND'|'EVALUATION_CONFIG'|null,
     *     DataQualityEvaluationConfig?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
