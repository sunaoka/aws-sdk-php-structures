<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $State
 * @property 'ContentOnly'|null $MuxType
 */
class ContentArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     State: 'Enabled'|'Disabled',
     *     MuxType?: 'ContentOnly'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
