<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|'cancelled'|null $status
 * @property string|null $reason
 * @property ExperimentError|null $error
 */
class ExperimentState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|'cancelled'|null,
     *     reason?: string|null,
     *     error?: ExperimentError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
