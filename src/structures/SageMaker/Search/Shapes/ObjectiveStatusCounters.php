<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Succeeded
 * @property int<0, max> $Pending
 * @property int<0, max> $Failed
 */
class ObjectiveStatusCounters extends Shape
{
    /**
     * @param array{
     *     Succeeded?: int<0, max>,
     *     Pending?: int<0, max>,
     *     Failed?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
