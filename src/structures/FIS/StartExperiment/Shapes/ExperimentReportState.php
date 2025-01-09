<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'running'|'completed'|'cancelled'|'failed' $status
 * @property string $reason
 * @property ExperimentReportError $error
 */
class ExperimentReportState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'running'|'completed'|'cancelled'|'failed',
     *     reason?: string,
     *     error?: ExperimentReportError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
