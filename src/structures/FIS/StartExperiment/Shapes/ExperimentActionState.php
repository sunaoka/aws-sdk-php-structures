<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'initiating'|'running'|'completed'|'cancelled'|'stopping'|'stopped'|'failed'|'skipped'|null $status
 * @property string|null $reason
 */
class ExperimentActionState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'initiating'|'running'|'completed'|'cancelled'|'stopping'|'stopped'|'failed'|'skipped'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
