<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TemplatedPathList
 * @property list<string> $HistoricalDataPathList
 */
class AutoDetectionS3SourceConfig extends Shape
{
    /**
     * @param array{
     *     TemplatedPathList?: list<string>,
     *     HistoricalDataPathList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
