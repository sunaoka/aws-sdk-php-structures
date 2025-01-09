<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeRuntimeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 */
class DescribeRuntimeConfigurationRequest extends Request
{
    /**
     * @param array{FleetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
