<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CloudWatchMetricsEnabled
 * @property string $ResultsS3Prefix
 * @property 'COLUMN'|'ROW' $CompositeRuleEvaluationMethod
 */
class DataQualityEvaluationRunAdditionalRunOptions extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool,
     *     ResultsS3Prefix?: string,
     *     CompositeRuleEvaluationMethod?: 'COLUMN'|'ROW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
