<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHyperParameterTuningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Succeeded
 * @property int<0, max>|null $Pending
 * @property int<0, max>|null $Failed
 */
class ObjectiveStatusCounters extends Shape
{
    /**
     * @param array{
     *     Succeeded?: int<0, max>|null,
     *     Pending?: int<0, max>|null,
     *     Failed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
