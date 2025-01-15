<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PresenterOnly'|'Horizontal'|'Vertical'|'ActiveSpeakerOnly' $ContentShareLayout
 * @property PresenterOnlyConfiguration|null $PresenterOnlyConfiguration
 * @property ActiveSpeakerOnlyConfiguration|null $ActiveSpeakerOnlyConfiguration
 * @property HorizontalLayoutConfiguration|null $HorizontalLayoutConfiguration
 * @property VerticalLayoutConfiguration|null $VerticalLayoutConfiguration
 * @property VideoAttribute|null $VideoAttribute
 * @property 'Landscape'|'Portrait'|null $CanvasOrientation
 */
class GridViewConfiguration extends Shape
{
    /**
     * @param array{
     *     ContentShareLayout: 'PresenterOnly'|'Horizontal'|'Vertical'|'ActiveSpeakerOnly',
     *     PresenterOnlyConfiguration?: PresenterOnlyConfiguration|null,
     *     ActiveSpeakerOnlyConfiguration?: ActiveSpeakerOnlyConfiguration|null,
     *     HorizontalLayoutConfiguration?: HorizontalLayoutConfiguration|null,
     *     VerticalLayoutConfiguration?: VerticalLayoutConfiguration|null,
     *     VideoAttribute?: VideoAttribute|null,
     *     CanvasOrientation?: 'Landscape'|'Portrait'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
