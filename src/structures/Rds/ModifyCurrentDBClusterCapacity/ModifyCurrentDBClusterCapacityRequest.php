<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCurrentDBClusterCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property int|null $Capacity
 * @property int|null $SecondsBeforeTimeout
 * @property string|null $TimeoutAction
 */
class ModifyCurrentDBClusterCapacityRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     Capacity?: int|null,
     *     SecondsBeforeTimeout?: int|null,
     *     TimeoutAction?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
