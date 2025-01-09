<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AribDestinationSettings $AribDestinationSettings
 * @property BurnInDestinationSettings $BurnInDestinationSettings
 * @property DvbSubDestinationSettings $DvbSubDestinationSettings
 * @property EbuTtDDestinationSettings $EbuTtDDestinationSettings
 * @property EmbeddedDestinationSettings $EmbeddedDestinationSettings
 * @property EmbeddedPlusScte20DestinationSettings $EmbeddedPlusScte20DestinationSettings
 * @property RtmpCaptionInfoDestinationSettings $RtmpCaptionInfoDestinationSettings
 * @property Scte20PlusEmbeddedDestinationSettings $Scte20PlusEmbeddedDestinationSettings
 * @property Scte27DestinationSettings $Scte27DestinationSettings
 * @property SmpteTtDestinationSettings $SmpteTtDestinationSettings
 * @property TeletextDestinationSettings $TeletextDestinationSettings
 * @property TtmlDestinationSettings $TtmlDestinationSettings
 * @property WebvttDestinationSettings $WebvttDestinationSettings
 */
class CaptionDestinationSettings extends Shape
{
    /**
     * @param array{
     *     AribDestinationSettings?: AribDestinationSettings,
     *     BurnInDestinationSettings?: BurnInDestinationSettings,
     *     DvbSubDestinationSettings?: DvbSubDestinationSettings,
     *     EbuTtDDestinationSettings?: EbuTtDDestinationSettings,
     *     EmbeddedDestinationSettings?: EmbeddedDestinationSettings,
     *     EmbeddedPlusScte20DestinationSettings?: EmbeddedPlusScte20DestinationSettings,
     *     RtmpCaptionInfoDestinationSettings?: RtmpCaptionInfoDestinationSettings,
     *     Scte20PlusEmbeddedDestinationSettings?: Scte20PlusEmbeddedDestinationSettings,
     *     Scte27DestinationSettings?: Scte27DestinationSettings,
     *     SmpteTtDestinationSettings?: SmpteTtDestinationSettings,
     *     TeletextDestinationSettings?: TeletextDestinationSettings,
     *     TtmlDestinationSettings?: TtmlDestinationSettings,
     *     WebvttDestinationSettings?: WebvttDestinationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
