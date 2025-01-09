<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationContext
 * @property string $ResultsS3Prefix
 * @property bool $CloudWatchMetricsEnabled
 * @property bool $ResultsPublishingEnabled
 */
class DQResultsPublishingOptions extends Shape
{
    /**
     * @param array{
     *     EvaluationContext?: string,
     *     ResultsS3Prefix?: string,
     *     CloudWatchMetricsEnabled?: bool,
     *     ResultsPublishingEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
