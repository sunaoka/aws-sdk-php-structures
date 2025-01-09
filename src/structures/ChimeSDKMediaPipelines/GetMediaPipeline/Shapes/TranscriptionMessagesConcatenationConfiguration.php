<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $State
 */
class TranscriptionMessagesConcatenationConfiguration extends Shape
{
    /**
     * @param array{State: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
