<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopClock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Simulation
 */
class StopClockRequest extends Request
{
    /**
     * @param array{Simulation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
