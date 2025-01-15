<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GridView'|null $Layout
 * @property 'HD'|'FHD'|null $Resolution
 * @property GridViewConfiguration $GridViewConfiguration
 */
class CompositedVideoArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     Layout?: 'GridView'|null,
     *     Resolution?: 'HD'|'FHD'|null,
     *     GridViewConfiguration: GridViewConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
