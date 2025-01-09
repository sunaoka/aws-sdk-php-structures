<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'starting'|'completed'|'failed'|'in_progress' $eventType
 * @property \Aws\Api\DateTimeResult $startTimestamp
 * @property \Aws\Api\DateTimeResult $endTimestamp
 * @property RunMetrics $metrics
 * @property string $error
 * @property CompactionMetrics $compactionMetrics
 * @property RetentionMetrics $retentionMetrics
 * @property OrphanFileDeletionMetrics $orphanFileDeletionMetrics
 */
class TableOptimizerRun extends Shape
{
    /**
     * @param array{
     *     eventType?: 'starting'|'completed'|'failed'|'in_progress',
     *     startTimestamp?: \Aws\Api\DateTimeResult,
     *     endTimestamp?: \Aws\Api\DateTimeResult,
     *     metrics?: RunMetrics,
     *     error?: string,
     *     compactionMetrics?: CompactionMetrics,
     *     retentionMetrics?: RetentionMetrics,
     *     orphanFileDeletionMetrics?: OrphanFileDeletionMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
