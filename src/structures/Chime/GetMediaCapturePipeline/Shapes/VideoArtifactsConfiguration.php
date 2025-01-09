<?php

namespace Sunaoka\Aws\Structures\Chime\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $State
 * @property 'VideoOnly' $MuxType
 */
class VideoArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     State: 'Enabled'|'Disabled',
     *     MuxType?: 'VideoOnly'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
