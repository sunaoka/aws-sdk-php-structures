<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $App
 * @property string $Domain
 * @property string $Simulation
 */
class DeleteAppRequest extends Request
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
