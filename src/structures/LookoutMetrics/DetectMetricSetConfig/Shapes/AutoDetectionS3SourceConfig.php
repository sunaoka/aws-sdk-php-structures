<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $TemplatedPathList
 * @property list<string>|null $HistoricalDataPathList
 */
class AutoDetectionS3SourceConfig extends Shape
{
    /**
     * @param array{
     *     TemplatedPathList?: list<string>|null,
     *     HistoricalDataPathList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
