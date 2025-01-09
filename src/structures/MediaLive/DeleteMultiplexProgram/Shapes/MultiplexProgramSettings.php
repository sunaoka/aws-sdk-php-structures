<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1' $PreferredChannelPipeline
 * @property int<0, 65535> $ProgramNumber
 * @property MultiplexProgramServiceDescriptor $ServiceDescriptor
 * @property MultiplexVideoSettings $VideoSettings
 */
class MultiplexProgramSettings extends Shape
{
    /**
     * @param array{
     *     PreferredChannelPipeline?: 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1',
     *     ProgramNumber: int<0, 65535>,
     *     ServiceDescriptor?: MultiplexProgramServiceDescriptor,
     *     VideoSettings?: MultiplexVideoSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
