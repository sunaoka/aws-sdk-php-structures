<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|null $status
 * @property string|null $reason
 */
class ExperimentState extends Shape
{
    /**
     * @param array{
     *     status?: 'pending'|'initiating'|'running'|'completed'|'stopping'|'stopped'|'failed'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
