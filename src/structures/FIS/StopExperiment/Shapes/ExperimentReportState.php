<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'running'|'completed'|'cancelled'|'failed'|null $status
 * @property string|null $reason
 * @property ExperimentReportError|null $error
 */
class ExperimentReportState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'running'|'completed'|'cancelled'|'failed'|null,
     *     reason?: string|null,
     *     error?: ExperimentReportError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
