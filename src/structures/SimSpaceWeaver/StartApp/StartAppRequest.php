<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property string $Domain
 * @property Shapes\LaunchOverrides $LaunchOverrides
 * @property string $Name
 * @property string $Simulation
 */
class StartAppRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     Domain: string,
     *     LaunchOverrides?: Shapes\LaunchOverrides,
     *     Name: string,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
