<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property string $ProgramName
 */
class DeleteMultiplexProgramRequest extends Request
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
