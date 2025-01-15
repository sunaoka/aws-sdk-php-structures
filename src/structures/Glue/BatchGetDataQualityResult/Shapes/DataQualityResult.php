<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResultId
 * @property string|null $ProfileId
 * @property double|null $Score
 * @property DataSource|null $DataSource
 * @property string|null $RulesetName
 * @property string|null $EvaluationContext
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $JobName
 * @property string|null $JobRunId
 * @property string|null $RulesetEvaluationRunId
 * @property list<DataQualityRuleResult>|null $RuleResults
 * @property list<DataQualityAnalyzerResult>|null $AnalyzerResults
 * @property list<DataQualityObservation>|null $Observations
 */
class DataQualityResult extends Shape
{
    /**
     * @param array{
     *     ResultId?: string|null,
     *     ProfileId?: string|null,
     *     Score?: double|null,
     *     DataSource?: DataSource|null,
     *     RulesetName?: string|null,
     *     EvaluationContext?: string|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     JobName?: string|null,
     *     JobRunId?: string|null,
     *     RulesetEvaluationRunId?: string|null,
     *     RuleResults?: list<DataQualityRuleResult>|null,
     *     AnalyzerResults?: list<DataQualityAnalyzerResult>|null,
     *     Observations?: list<DataQualityObservation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
