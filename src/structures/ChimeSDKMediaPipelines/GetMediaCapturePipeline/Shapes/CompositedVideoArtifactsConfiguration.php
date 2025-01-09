<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GridView' $Layout
 * @property 'HD'|'FHD' $Resolution
 * @property GridViewConfiguration $GridViewConfiguration
 */
class CompositedVideoArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     Layout?: 'GridView',
     *     Resolution?: 'HD'|'FHD',
     *     GridViewConfiguration: GridViewConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
