<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<string>|null $AvailabilityZones
 * @property list<Shapes\MultiplexOutputDestination>|null $Destinations
 * @property string|null $Id
 * @property Shapes\MultiplexSettings|null $MultiplexSettings
 * @property string|null $Name
 * @property int|null $PipelinesRunningCount
 * @property int|null $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 */
class DescribeMultiplexResponse extends Response
{
}
