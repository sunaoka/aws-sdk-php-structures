<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $AvailabilityZones
 * @property list<MultiplexOutputDestination>|null $Destinations
 * @property string|null $Id
 * @property MultiplexSettings|null $MultiplexSettings
 * @property string|null $Name
 * @property int|null $PipelinesRunningCount
 * @property int|null $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 */
class Multiplex extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     Destinations?: list<MultiplexOutputDestination>|null,
     *     Id?: string|null,
     *     MultiplexSettings?: MultiplexSettings|null,
     *     Name?: string|null,
     *     PipelinesRunningCount?: int|null,
     *     ProgramCount?: int|null,
     *     State?: 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
