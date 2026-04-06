<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CloudWatchMetricsEnabled
 * @property string|null $ResultsS3Prefix
 */
class DataQualityEvaluationRunAdditionalRunOptions extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetricsEnabled?: bool|null,
     *     ResultsS3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
