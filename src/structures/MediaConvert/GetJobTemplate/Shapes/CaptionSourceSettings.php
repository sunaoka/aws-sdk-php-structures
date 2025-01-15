<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AncillarySourceSettings|null $AncillarySourceSettings
 * @property DvbSubSourceSettings|null $DvbSubSourceSettings
 * @property EmbeddedSourceSettings|null $EmbeddedSourceSettings
 * @property FileSourceSettings|null $FileSourceSettings
 * @property 'ANCILLARY'|'DVB_SUB'|'EMBEDDED'|'SCTE20'|'SCC'|'TTML'|'STL'|'SRT'|'SMI'|'SMPTE_TT'|'TELETEXT'|'NULL_SOURCE'|'IMSC'|'WEBVTT'|null $SourceType
 * @property TeletextSourceSettings|null $TeletextSourceSettings
 * @property TrackSourceSettings|null $TrackSourceSettings
 * @property WebvttHlsSourceSettings|null $WebvttHlsSourceSettings
 */
class CaptionSourceSettings extends Shape
{
    /**
     * @param array{
     *     AncillarySourceSettings?: AncillarySourceSettings|null,
     *     DvbSubSourceSettings?: DvbSubSourceSettings|null,
     *     EmbeddedSourceSettings?: EmbeddedSourceSettings|null,
     *     FileSourceSettings?: FileSourceSettings|null,
     *     SourceType?: 'ANCILLARY'|'DVB_SUB'|'EMBEDDED'|'SCTE20'|'SCC'|'TTML'|'STL'|'SRT'|'SMI'|'SMPTE_TT'|'TELETEXT'|'NULL_SOURCE'|'IMSC'|'WEBVTT'|null,
     *     TeletextSourceSettings?: TeletextSourceSettings|null,
     *     TrackSourceSettings?: TrackSourceSettings|null,
     *     WebvttHlsSourceSettings?: WebvttHlsSourceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
