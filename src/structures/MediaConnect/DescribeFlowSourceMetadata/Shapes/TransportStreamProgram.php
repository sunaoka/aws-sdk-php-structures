<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PcrPid
 * @property string $ProgramName
 * @property int $ProgramNumber
 * @property int $ProgramPid
 * @property list<TransportStream> $Streams
 */
class TransportStreamProgram extends Shape
{
    /**
     * @param array{
     *     PcrPid: int,
     *     ProgramName?: string,
     *     ProgramNumber: int,
     *     ProgramPid: int,
     *     Streams: list<TransportStream>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
