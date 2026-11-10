<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityEvaluationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'ON_DEMAND'|'EVALUATION_CONFIG'|null $EvaluationRunMode
 * @property \Aws\Api\DateTimeResult|null $CreatedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property 'CATALOG'|'DATABASE'|'TABLE'|null $Level
 * @property DataQualityEvaluationConfigListDataSource|null $DataSource
 * @property string|null $RulesetName
 * @property 'SIMPLE'|'ADVANCED'|null $ManagedRulesetName
 * @property bool|null $PauseRuns
 */
class DataQualityEvaluationConfigListDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EvaluationRunMode?: 'ON_DEMAND'|'EVALUATION_CONFIG'|null,
     *     CreatedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     Level?: 'CATALOG'|'DATABASE'|'TABLE'|null,
     *     DataSource?: DataQualityEvaluationConfigListDataSource|null,
     *     RulesetName?: string|null,
     *     ManagedRulesetName?: 'SIMPLE'|'ADVANCED'|null,
     *     PauseRuns?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
