<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityRuleRecommendationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property DataSource|null $DataSource
 * @property string|null $CreatedRulesetName
 * @property 'BASIC'|'ADVANCED'|null $RecommendationMode
 */
class DataQualityRuleRecommendationRunDescription extends Shape
{
    /**
     * @param array{
     *     RunId?: string|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     DataSource?: DataSource|null,
     *     CreatedRulesetName?: string|null,
     *     RecommendationMode?: 'BASIC'|'ADVANCED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
