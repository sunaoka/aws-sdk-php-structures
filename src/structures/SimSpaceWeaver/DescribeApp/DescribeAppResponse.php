<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $Domain
 * @property Shapes\SimulationAppEndpointInfo|null $EndpointInfo
 * @property Shapes\LaunchOverrides|null $LaunchOverrides
 * @property string|null $Name
 * @property string|null $Simulation
 * @property 'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'ERROR'|'UNKNOWN'|null $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|null $TargetStatus
 */
class DescribeAppResponse extends Response
{
}
