<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanEvaluationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'activate'|'deactivate'|null $action
 * @property string|null $name
 */
class MinimalWorkflow extends Shape
{
    /**
     * @param array{
     *     action?: 'activate'|'deactivate'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
