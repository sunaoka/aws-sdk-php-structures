<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $App
 * @property string $Domain
 * @property string $Simulation
 */
class StopAppRequest extends Request
{
    /**
     * @param array{
     *     App: string,
     *     Domain: string,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
