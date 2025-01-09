<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL_CHANNELS'|'PROGRAM_1'|'PROGRAM_2'|'PROGRAM_3'|'PROGRAM_4'|'PROGRAM_5'|'PROGRAM_6'|'PROGRAM_7'|'PROGRAM_8' $ProgramSelection
 */
class AudioDolbyEDecode extends Shape
{
    /**
     * @param array{ProgramSelection: 'ALL_CHANNELS'|'PROGRAM_1'|'PROGRAM_2'|'PROGRAM_3'|'PROGRAM_4'|'PROGRAM_5'|'PROGRAM_6'|'PROGRAM_7'|'PROGRAM_8'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
