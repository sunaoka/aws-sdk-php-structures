<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialName
 * @property string|null $ExperimentName
 */
class ParentShape extends Shape
{
    /**
     * @param array{
     *     TrialName?: string|null,
     *     ExperimentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
