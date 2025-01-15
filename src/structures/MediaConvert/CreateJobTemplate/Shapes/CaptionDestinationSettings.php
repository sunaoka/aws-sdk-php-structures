<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BurninDestinationSettings|null $BurninDestinationSettings
 * @property 'BURN_IN'|'DVB_SUB'|'EMBEDDED'|'EMBEDDED_PLUS_SCTE20'|'IMSC'|'SCTE20_PLUS_EMBEDDED'|'SCC'|'SRT'|'SMI'|'TELETEXT'|'TTML'|'WEBVTT'|null $DestinationType
 * @property DvbSubDestinationSettings|null $DvbSubDestinationSettings
 * @property EmbeddedDestinationSettings|null $EmbeddedDestinationSettings
 * @property ImscDestinationSettings|null $ImscDestinationSettings
 * @property SccDestinationSettings|null $SccDestinationSettings
 * @property SrtDestinationSettings|null $SrtDestinationSettings
 * @property TeletextDestinationSettings|null $TeletextDestinationSettings
 * @property TtmlDestinationSettings|null $TtmlDestinationSettings
 * @property WebvttDestinationSettings|null $WebvttDestinationSettings
 */
class CaptionDestinationSettings extends Shape
{
    /**
     * @param array{
     *     BurninDestinationSettings?: BurninDestinationSettings|null,
     *     DestinationType?: 'BURN_IN'|'DVB_SUB'|'EMBEDDED'|'EMBEDDED_PLUS_SCTE20'|'IMSC'|'SCTE20_PLUS_EMBEDDED'|'SCC'|'SRT'|'SMI'|'TELETEXT'|'TTML'|'WEBVTT'|null,
     *     DvbSubDestinationSettings?: DvbSubDestinationSettings|null,
     *     EmbeddedDestinationSettings?: EmbeddedDestinationSettings|null,
     *     ImscDestinationSettings?: ImscDestinationSettings|null,
     *     SccDestinationSettings?: SccDestinationSettings|null,
     *     SrtDestinationSettings?: SrtDestinationSettings|null,
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
