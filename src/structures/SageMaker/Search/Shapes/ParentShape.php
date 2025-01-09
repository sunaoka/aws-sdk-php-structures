<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialName
 * @property string $ExperimentName
 */
class ParentShape extends Shape
{
    /**
     * @param array{
     *     TrialName?: string,
     *     ExperimentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
