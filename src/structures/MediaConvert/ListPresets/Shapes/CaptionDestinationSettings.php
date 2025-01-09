<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BurninDestinationSettings $BurninDestinationSettings
 * @property 'BURN_IN'|'DVB_SUB'|'EMBEDDED'|'EMBEDDED_PLUS_SCTE20'|'IMSC'|'SCTE20_PLUS_EMBEDDED'|'SCC'|'SRT'|'SMI'|'TELETEXT'|'TTML'|'WEBVTT' $DestinationType
 * @property DvbSubDestinationSettings $DvbSubDestinationSettings
 * @property EmbeddedDestinationSettings $EmbeddedDestinationSettings
 * @property ImscDestinationSettings $ImscDestinationSettings
 * @property SccDestinationSettings $SccDestinationSettings
 * @property SrtDestinationSettings $SrtDestinationSettings
 * @property TeletextDestinationSettings $TeletextDestinationSettings
 * @property TtmlDestinationSettings $TtmlDestinationSettings
 * @property WebvttDestinationSettings $WebvttDestinationSettings
 */
class CaptionDestinationSettings extends Shape
{
    /**
     * @param array{
     *     BurninDestinationSettings?: BurninDestinationSettings,
     *     DestinationType?: 'BURN_IN'|'DVB_SUB'|'EMBEDDED'|'EMBEDDED_PLUS_SCTE20'|'IMSC'|'SCTE20_PLUS_EMBEDDED'|'SCC'|'SRT'|'SMI'|'TELETEXT'|'TTML'|'WEBVTT',
     *     DvbSubDestinationSettings?: DvbSubDestinationSettings,
     *     EmbeddedDestinationSettings?: EmbeddedDestinationSettings,
     *     ImscDestinationSettings?: ImscDestinationSettings,
     *     SccDestinationSettings?: SccDestinationSettings,
     *     SrtDestinationSettings?: SrtDestinationSettings,
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
