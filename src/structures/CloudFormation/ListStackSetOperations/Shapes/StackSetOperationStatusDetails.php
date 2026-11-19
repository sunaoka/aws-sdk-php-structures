<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Stages|null $Stages
 * @property int<0, max>|null $TotalAccountsCount
 * @property int<0, max>|null $TotalStackInstancesCount
 * @property int<0, max>|null $FailedStackInstancesCount
 */
class StackSetOperationStatusDetails extends Shape
{
    /**
     * @param array{
     *     Stages?: Stages|null,
     *     TotalAccountsCount?: int<0, max>|null,
     *     TotalStackInstancesCount?: int<0, max>|null,
     *     FailedStackInstancesCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
