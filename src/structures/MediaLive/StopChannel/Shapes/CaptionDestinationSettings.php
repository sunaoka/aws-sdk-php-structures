<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AribDestinationSettings|null $AribDestinationSettings
 * @property BurnInDestinationSettings|null $BurnInDestinationSettings
 * @property DvbSubDestinationSettings|null $DvbSubDestinationSettings
 * @property EbuTtDDestinationSettings|null $EbuTtDDestinationSettings
 * @property EmbeddedDestinationSettings|null $EmbeddedDestinationSettings
 * @property EmbeddedPlusScte20DestinationSettings|null $EmbeddedPlusScte20DestinationSettings
 * @property RtmpCaptionInfoDestinationSettings|null $RtmpCaptionInfoDestinationSettings
 * @property Scte20PlusEmbeddedDestinationSettings|null $Scte20PlusEmbeddedDestinationSettings
 * @property Scte27DestinationSettings|null $Scte27DestinationSettings
 * @property SmpteTtDestinationSettings|null $SmpteTtDestinationSettings
 * @property TeletextDestinationSettings|null $TeletextDestinationSettings
 * @property TtmlDestinationSettings|null $TtmlDestinationSettings
 * @property WebvttDestinationSettings|null $WebvttDestinationSettings
 */
class CaptionDestinationSettings extends Shape
{
    /**
     * @param array{
     *     AribDestinationSettings?: AribDestinationSettings|null,
     *     BurnInDestinationSettings?: BurnInDestinationSettings|null,
     *     DvbSubDestinationSettings?: DvbSubDestinationSettings|null,
     *     EbuTtDDestinationSettings?: EbuTtDDestinationSettings|null,
     *     EmbeddedDestinationSettings?: EmbeddedDestinationSettings|null,
     *     EmbeddedPlusScte20DestinationSettings?: EmbeddedPlusScte20DestinationSettings|null,
     *     RtmpCaptionInfoDestinationSettings?: RtmpCaptionInfoDestinationSettings|null,
     *     Scte20PlusEmbeddedDestinationSettings?: Scte20PlusEmbeddedDestinationSettings|null,
     *     Scte27DestinationSettings?: Scte27DestinationSettings|null,
     *     SmpteTtDestinationSettings?: SmpteTtDestinationSettings|null,
     *     TeletextDestinationSettings?: TeletextDestinationSettings|null,
     *     TtmlDestinationSettings?: TtmlDestinationSettings|null,
     *     WebvttDestinationSettings?: WebvttDestinationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
