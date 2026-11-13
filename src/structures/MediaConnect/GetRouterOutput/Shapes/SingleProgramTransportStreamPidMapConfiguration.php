<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PidMapRule> $Rules
 * @property string $DefaultAction
 * @property TransportStreamIdConfiguration|null $TransportStreamId
 * @property ProgramNumberConfiguration|null $ProgramNumber
 * @property ProgramMapTablePidConfiguration|null $ProgramMapTablePid
 * @property ProgramClockReferencePidConfiguration|null $ProgramClockReferencePid
 * @property AutoPidMapConfiguration|null $Auto
 */
class SingleProgramTransportStreamPidMapConfiguration extends Shape
{
    /**
     * @param array{
     *     Rules: list<PidMapRule>,
     *     DefaultAction: string,
     *     TransportStreamId?: TransportStreamIdConfiguration|null,
     *     ProgramNumber?: ProgramNumberConfiguration|null,
     *     ProgramMapTablePid?: ProgramMapTablePidConfiguration|null,
     *     ProgramClockReferencePid?: ProgramClockReferencePidConfiguration|null,
     *     Auto?: AutoPidMapConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
