<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PresenterOnly'|'Horizontal'|'Vertical'|'ActiveSpeakerOnly' $ContentShareLayout
 * @property PresenterOnlyConfiguration $PresenterOnlyConfiguration
 * @property ActiveSpeakerOnlyConfiguration $ActiveSpeakerOnlyConfiguration
 * @property HorizontalLayoutConfiguration $HorizontalLayoutConfiguration
 * @property VerticalLayoutConfiguration $VerticalLayoutConfiguration
 * @property VideoAttribute $VideoAttribute
 * @property 'Landscape'|'Portrait' $CanvasOrientation
 */
class GridViewConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentShareLayout: 'PresenterOnly'|'Horizontal'|'Vertical'|'ActiveSpeakerOnly',
     *     PresenterOnlyConfiguration?: PresenterOnlyConfiguration,
     *     ActiveSpeakerOnlyConfiguration?: ActiveSpeakerOnlyConfiguration,
     *     HorizontalLayoutConfiguration?: HorizontalLayoutConfiguration,
     *     VerticalLayoutConfiguration?: VerticalLayoutConfiguration,
     *     VideoAttribute?: VideoAttribute,
     *     CanvasOrientation?: 'Landscape'|'Portrait'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
