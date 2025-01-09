<?php

namespace Sunaoka\Aws\Structures\GameLift\ClaimGameServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ACTIVE'|'DRAINING'> $InstanceStatuses
 */
class ClaimFilterOption extends Shape
{
    /**
     * @param array{InstanceStatuses?: list<'ACTIVE'|'DRAINING'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
