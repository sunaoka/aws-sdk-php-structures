<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateRuntimeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property Shapes\RuntimeConfiguration $RuntimeConfiguration
 */
class UpdateRuntimeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     RuntimeConfiguration: Shapes\RuntimeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
