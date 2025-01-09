<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'initiating'|'running'|'completed'|'cancelled'|'stopping'|'stopped'|'failed'|'skipped' $status
 * @property string $reason
 */
class ExperimentActionState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'initiating'|'running'|'completed'|'cancelled'|'stopping'|'stopped'|'failed'|'skipped',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
