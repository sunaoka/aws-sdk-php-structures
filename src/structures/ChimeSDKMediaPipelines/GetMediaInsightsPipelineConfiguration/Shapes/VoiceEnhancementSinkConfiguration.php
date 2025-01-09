<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Disabled
 */
class VoiceEnhancementSinkConfiguration extends Shape
{
    /**
     * @param array{Disabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
