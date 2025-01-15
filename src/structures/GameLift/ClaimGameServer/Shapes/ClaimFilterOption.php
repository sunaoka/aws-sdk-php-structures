<?php

namespace Sunaoka\Aws\Structures\GameLift\ClaimGameServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ACTIVE'|'DRAINING'>|null $InstanceStatuses
 */
class ClaimFilterOption extends Shape
{
    /**
     * @param array{InstanceStatuses?: list<'ACTIVE'|'DRAINING'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
