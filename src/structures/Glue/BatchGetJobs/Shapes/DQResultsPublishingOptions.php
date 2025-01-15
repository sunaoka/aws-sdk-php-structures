<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EvaluationContext
 * @property string|null $ResultsS3Prefix
 * @property bool|null $CloudWatchMetricsEnabled
 * @property bool|null $ResultsPublishingEnabled
 */
class DQResultsPublishingOptions extends Shape
{
    /**
     * @param array{
     *     EvaluationContext?: string|null,
     *     ResultsS3Prefix?: string|null,
     *     CloudWatchMetricsEnabled?: bool|null,
     *     ResultsPublishingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
