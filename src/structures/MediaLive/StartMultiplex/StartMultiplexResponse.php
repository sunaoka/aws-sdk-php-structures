<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartMultiplex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<string> $AvailabilityZones
 * @property list<Shapes\MultiplexOutputDestination> $Destinations
 * @property string $Id
 * @property Shapes\MultiplexSettings $MultiplexSettings
 * @property string $Name
 * @property int $PipelinesRunningCount
 * @property int $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED' $State
 * @property array<string, string> $Tags
 */
class StartMultiplexResponse extends Response
{
}
