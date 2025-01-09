<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResultId
 * @property string $ProfileId
 * @property double $Score
 * @property DataSource $DataSource
 * @property string $RulesetName
 * @property string $EvaluationContext
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $JobName
 * @property string $JobRunId
 * @property string $RulesetEvaluationRunId
 * @property list<DataQualityRuleResult> $RuleResults
 * @property list<DataQualityAnalyzerResult> $AnalyzerResults
 * @property list<DataQualityObservation> $Observations
 */
class DataQualityResult extends Shape
{
    /**
     * @param array{
     *     ResultId?: string,
     *     ProfileId?: string,
     *     Score?: double,
     *     DataSource?: DataSource,
     *     RulesetName?: string,
     *     EvaluationContext?: string,
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     JobName?: string,
     *     JobRunId?: string,
     *     RulesetEvaluationRunId?: string,
     *     RuleResults?: list<DataQualityRuleResult>,
     *     AnalyzerResults?: list<DataQualityAnalyzerResult>,
     *     Observations?: list<DataQualityObservation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
