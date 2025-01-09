<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplexProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property Shapes\MultiplexProgramSettings $MultiplexProgramSettings
 * @property string $ProgramName
 */
class UpdateMultiplexProgramRequest extends Request
{
    /**
     * @param array{
     *     MultiplexId: string,
     *     MultiplexProgramSettings?: Shapes\MultiplexProgramSettings,
     *     ProgramName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
