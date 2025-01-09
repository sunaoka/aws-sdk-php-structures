<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled' $State
 */
class AudioConcatenationConfiguration extends Shape
{
    /**
     * @param array{State: 'Enabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
