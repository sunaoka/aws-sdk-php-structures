<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TERMINATE'|'KEEP_ALIVE'|null $action
 * @property int|null $terminationWaitTimeInMinutes
 */
class BlueInstanceTerminationOption extends Shape
{
    /**
     * @param array{
     *     action?: 'TERMINATE'|'KEEP_ALIVE'|null,
     *     terminationWaitTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
