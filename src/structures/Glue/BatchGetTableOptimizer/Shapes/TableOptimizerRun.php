<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'starting'|'completed'|'failed'|'in_progress'|null $eventType
 * @property \Aws\Api\DateTimeResult|null $startTimestamp
 * @property \Aws\Api\DateTimeResult|null $endTimestamp
 * @property RunMetrics|null $metrics
 * @property string|null $error
 * @property CompactionMetrics|null $compactionMetrics
 * @property RetentionMetrics|null $retentionMetrics
 * @property OrphanFileDeletionMetrics|null $orphanFileDeletionMetrics
 */
class TableOptimizerRun extends Shape
{
    /**
     * @param array{
     *     eventType?: 'starting'|'completed'|'failed'|'in_progress'|null,
     *     startTimestamp?: \Aws\Api\DateTimeResult|null,
     *     endTimestamp?: \Aws\Api\DateTimeResult|null,
     *     metrics?: RunMetrics|null,
     *     error?: string|null,
     *     compactionMetrics?: CompactionMetrics|null,
     *     retentionMetrics?: RetentionMetrics|null,
     *     orphanFileDeletionMetrics?: OrphanFileDeletionMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
