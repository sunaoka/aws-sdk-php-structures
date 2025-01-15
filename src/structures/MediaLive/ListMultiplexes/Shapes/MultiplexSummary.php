<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $AvailabilityZones
 * @property string|null $Id
 * @property MultiplexSettingsSummary|null $MultiplexSettings
 * @property string|null $Name
 * @property int|null $PipelinesRunningCount
 * @property int|null $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 */
class MultiplexSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     Id?: string|null,
     *     MultiplexSettings?: MultiplexSettingsSummary|null,
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
