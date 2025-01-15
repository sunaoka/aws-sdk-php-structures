<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 * @property string|null $value
 */
class ExperimentStopCondition extends Shape
{
    /**
     * @param array{
     *     source?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
