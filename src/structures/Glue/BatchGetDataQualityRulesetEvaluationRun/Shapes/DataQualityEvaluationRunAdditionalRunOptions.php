<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudWatchMetricsEnabled
 * @property string|null $ResultsS3Prefix
 * @property 'COLUMN'|'ROW'|null $CompositeRuleEvaluationMethod
 * @property string|null $CustomLogGroupPrefix
 * @property RowLevelResultsOptions|null $RowLevelResults
 * @property ProfilingResultsOptions|null $ProfilingResults
 * @property 'ALL'|'NONE'|null $ObservationScope
 * @property 'SCHEDULED'|'FIXED'|null $ObservationMode
 * @property DataQualityRuleResultsOptions|null $DataQualityRuleResults
 * @property ObservationResultsOptions|null $ObservationResults
 */
class DataQualityEvaluationRunAdditionalRunOptions extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool|null,
     *     ResultsS3Prefix?: string|null,
     *     CompositeRuleEvaluationMethod?: 'COLUMN'|'ROW'|null,
     *     CustomLogGroupPrefix?: string|null,
     *     RowLevelResults?: RowLevelResultsOptions|null,
     *     ProfilingResults?: ProfilingResultsOptions|null,
     *     ObservationScope?: 'ALL'|'NONE'|null,
     *     ObservationMode?: 'SCHEDULED'|'FIXED'|null,
     *     DataQualityRuleResults?: DataQualityRuleResultsOptions|null,
     *     ObservationResults?: ObservationResultsOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
