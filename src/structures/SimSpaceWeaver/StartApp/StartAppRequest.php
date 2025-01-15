<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $Domain
 * @property Shapes\LaunchOverrides|null $LaunchOverrides
 * @property string $Name
 * @property string $Simulation
 */
class StartAppRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Domain: string,
     *     LaunchOverrides?: Shapes\LaunchOverrides|null,
     *     Name: string,
     *     Simulation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
