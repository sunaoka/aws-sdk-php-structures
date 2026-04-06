<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'skip-all'|'run-all'|null $actionsMode
 */
class StartExperimentExperimentOptionsInput extends Shape
{
    /**
     * @param array{actionsMode?: 'skip-all'|'run-all'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
