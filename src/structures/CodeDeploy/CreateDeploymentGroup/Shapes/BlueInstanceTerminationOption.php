<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TERMINATE'|'KEEP_ALIVE' $action
 * @property int $terminationWaitTimeInMinutes
 */
class BlueInstanceTerminationOption extends Shape
{
    /**
     * @param array{
     *     action?: 'TERMINATE'|'KEEP_ALIVE',
     *     terminationWaitTimeInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
