<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResultsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource|null $DataSource
 * @property \Aws\Api\DateTimeResult|null $PublishedAfter
 * @property \Aws\Api\DateTimeResult|null $PublishedBefore
 * @property array<string, string>|null $Dimensions
 * @property string|null $EvaluationContext
 * @property 'ON_DEMAND'|'EVALUATION_CONFIG'|null $EvaluationRunMode
 * @property string|null $DataQualityEvaluationConfig
 */
class DataQualityResultsV2FilterCriteria extends Shape
{
    /**
     * @param array{
     *     DataSource?: DataSource|null,
     *     PublishedAfter?: \Aws\Api\DateTimeResult|null,
     *     PublishedBefore?: \Aws\Api\DateTimeResult|null,
     *     Dimensions?: array<string, string>|null,
     *     EvaluationContext?: string|null,
     *     EvaluationRunMode?: 'ON_DEMAND'|'EVALUATION_CONFIG'|null,
     *     DataQualityEvaluationConfig?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
