<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartClock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Simulation
 */
class StartClockRequest extends Request
{
    /**
     * @param array{Simulation: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
