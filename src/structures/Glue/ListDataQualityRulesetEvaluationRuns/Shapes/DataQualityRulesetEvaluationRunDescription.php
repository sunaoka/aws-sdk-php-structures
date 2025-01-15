<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property DataSource|null $DataSource
 */
class DataQualityRulesetEvaluationRunDescription extends Shape
{
    /**
     * @param array{
     *     RunId?: string|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     DataSource?: DataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
