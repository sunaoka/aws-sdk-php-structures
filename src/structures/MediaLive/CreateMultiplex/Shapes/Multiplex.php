<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $AvailabilityZones
 * @property list<MultiplexOutputDestination> $Destinations
 * @property string $Id
 * @property MultiplexSettings $MultiplexSettings
 * @property string $Name
 * @property int $PipelinesRunningCount
 * @property int $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED' $State
 * @property array<string, string> $Tags
 */
class Multiplex extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AvailabilityZones?: list<string>,
     *     Destinations?: list<MultiplexOutputDestination>,
     *     Id?: string,
     *     MultiplexSettings?: MultiplexSettings,
     *     Name?: string,
     *     PipelinesRunningCount?: int,
     *     ProgramCount?: int,
     *     State?: 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
