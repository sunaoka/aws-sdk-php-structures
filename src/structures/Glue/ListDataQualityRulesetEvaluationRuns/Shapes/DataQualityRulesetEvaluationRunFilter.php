<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource $DataSource
 * @property \Aws\Api\DateTimeResult $StartedBefore
 * @property \Aws\Api\DateTimeResult $StartedAfter
 */
class DataQualityRulesetEvaluationRunFilter extends Shape
{
    /**
     * @param array{
     *     DataSource: DataSource,
     *     StartedBefore?: \Aws\Api\DateTimeResult,
     *     StartedAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
