<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'INHERIT_FROM_CLUSTER' $desiredState
 * @property 'ACTIVE'|'INACTIVE'|null $status
 */
class EksAccessEntry extends Shape
{
    /**
     * @param array{
     *     desiredState: 'ENABLED'|'DISABLED'|'INHERIT_FROM_CLUSTER',
     *     status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
