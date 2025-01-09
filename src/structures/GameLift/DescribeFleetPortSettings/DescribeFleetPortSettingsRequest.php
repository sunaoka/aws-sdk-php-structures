<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetPortSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $Location
 */
class DescribeFleetPortSettingsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
