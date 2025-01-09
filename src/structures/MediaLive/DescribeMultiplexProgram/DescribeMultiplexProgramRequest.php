<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplexProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property string $ProgramName
 */
class DescribeMultiplexProgramRequest extends Request
{
    /**
     * @param array{
     *     MultiplexId: string,
     *     ProgramName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
