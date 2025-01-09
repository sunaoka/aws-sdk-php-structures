<?php

namespace Sunaoka\Aws\Structures\Chime\ListMediaCapturePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $State
 * @property 'ContentOnly' $MuxType
 */
class ContentArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     State: 'Enabled'|'Disabled',
     *     MuxType?: 'ContentOnly'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
