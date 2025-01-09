<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Description
 * @property string $Domain
 * @property Shapes\SimulationAppEndpointInfo $EndpointInfo
 * @property Shapes\LaunchOverrides $LaunchOverrides
 * @property string $Name
 * @property string $Simulation
 * @property 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN' $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED' $TargetStatus
 */
class DescribeAppResponse extends Response
{
}
