<?php

namespace Sunaoka\Aws\Structures\FIS\ListExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|'cancelled' $status
 * @property string $reason
 * @property ExperimentError $error
 */
class ExperimentState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|'cancelled',
     *     reason?: string,
     *     error?: ExperimentError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
