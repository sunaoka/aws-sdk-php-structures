<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property Shapes\MultiplexProgramSettings $MultiplexProgramSettings
 * @property string $ProgramName
 * @property string $RequestId
 */
class CreateMultiplexProgramRequest extends Request
{
    /**
     * @param array{
     *     MultiplexId: string,
     *     MultiplexProgramSettings: Shapes\MultiplexProgramSettings,
     *     ProgramName: string,
     *     RequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
