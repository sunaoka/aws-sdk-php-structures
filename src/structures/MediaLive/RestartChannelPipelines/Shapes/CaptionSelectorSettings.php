<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AncillarySourceSettings $AncillarySourceSettings
 * @property AribSourceSettings $AribSourceSettings
 * @property DvbSubSourceSettings $DvbSubSourceSettings
 * @property EmbeddedSourceSettings $EmbeddedSourceSettings
 * @property Scte20SourceSettings $Scte20SourceSettings
 * @property Scte27SourceSettings $Scte27SourceSettings
 * @property TeletextSourceSettings $TeletextSourceSettings
 */
class CaptionSelectorSettings extends Shape
{
    /**
     * @param array{
     *     AncillarySourceSettings?: AncillarySourceSettings,
     *     AribSourceSettings?: AribSourceSettings,
     *     DvbSubSourceSettings?: DvbSubSourceSettings,
     *     EmbeddedSourceSettings?: EmbeddedSourceSettings,
     *     Scte20SourceSettings?: Scte20SourceSettings,
     *     Scte27SourceSettings?: Scte27SourceSettings,
     *     TeletextSourceSettings?: TeletextSourceSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
