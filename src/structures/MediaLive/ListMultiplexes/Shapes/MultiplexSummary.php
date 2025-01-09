<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $AvailabilityZones
 * @property string $Id
 * @property MultiplexSettingsSummary $MultiplexSettings
 * @property string $Name
 * @property int $PipelinesRunningCount
 * @property int $ProgramCount
 * @property 'CREATING'|'CREATE_FAILED'|'IDLE'|'STARTING'|'RUNNING'|'RECOVERING'|'STOPPING'|'DELETING'|'DELETED' $State
 * @property array<string, string> $Tags
 */
class MultiplexSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AvailabilityZones?: list<string>,
     *     Id?: string,
     *     MultiplexSettings?: MultiplexSettingsSummary,
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
