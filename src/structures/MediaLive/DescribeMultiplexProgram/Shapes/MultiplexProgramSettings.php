<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1' $PreferredChannelPipeline
 * @property int $ProgramNumber
 * @property MultiplexProgramServiceDescriptor $ServiceDescriptor
 * @property MultiplexVideoSettings $VideoSettings
 */
class MultiplexProgramSettings extends Shape
{
    /**
     * @param array{
     *     PreferredChannelPipeline?: 'CURRENTLY_ACTIVE'|'PIPELINE_0'|'PIPELINE_1',
     *     ProgramNumber: int,
     *     ServiceDescriptor?: MultiplexProgramServiceDescriptor,
     *     VideoSettings?: MultiplexVideoSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
