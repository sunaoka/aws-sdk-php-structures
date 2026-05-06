<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudWatchMetricsEnabled
 * @property string|null $ResultsS3Prefix
 * @property 'COLUMN'|'ROW'|null $CompositeRuleEvaluationMethod
 * @property string|null $CustomLogGroupPrefix
 */
class DataQualityEvaluationRunAdditionalRunOptions extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool|null,
     *     ResultsS3Prefix?: string|null,
     *     CompositeRuleEvaluationMethod?: 'COLUMN'|'ROW'|null,
     *     CustomLogGroupPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
