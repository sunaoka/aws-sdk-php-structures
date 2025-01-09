<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRulesetEvaluationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property DataSource $DataSource
 */
class DataQualityRulesetEvaluationRunDescription extends Shape
{
    /**
     * @param array{
     *     RunId?: string,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT',
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     DataSource?: DataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
