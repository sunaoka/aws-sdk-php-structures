<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCurrentDBClusterCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property int $Capacity
 * @property int $SecondsBeforeTimeout
 * @property string $TimeoutAction
 */
class ModifyCurrentDBClusterCapacityRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     Capacity?: int,
     *     SecondsBeforeTimeout?: int,
     *     TimeoutAction?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
