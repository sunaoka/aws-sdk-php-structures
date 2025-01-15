<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSource $DataSource
 * @property \Aws\Api\DateTimeResult|null $StartedBefore
 * @property \Aws\Api\DateTimeResult|null $StartedAfter
 */
class DataQualityRulesetEvaluationRunFilter extends Shape
{
    /**
     * @param array{
     *     DataSource: DataSource,
     *     StartedBefore?: \Aws\Api\DateTimeResult|null,
     *     StartedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
