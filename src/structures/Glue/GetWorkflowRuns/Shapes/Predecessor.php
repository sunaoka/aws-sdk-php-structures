<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobName
 * @property string|null $RunId
 */
class Predecessor extends Shape
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     RunId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
