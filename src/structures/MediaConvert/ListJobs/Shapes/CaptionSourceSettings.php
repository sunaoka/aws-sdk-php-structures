<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AncillarySourceSettings $AncillarySourceSettings
 * @property DvbSubSourceSettings $DvbSubSourceSettings
 * @property EmbeddedSourceSettings $EmbeddedSourceSettings
 * @property FileSourceSettings $FileSourceSettings
 * @property 'ANCILLARY'|'DVB_SUB'|'EMBEDDED'|'SCTE20'|'SCC'|'TTML'|'STL'|'SRT'|'SMI'|'SMPTE_TT'|'TELETEXT'|'NULL_SOURCE'|'IMSC'|'WEBVTT' $SourceType
 * @property TeletextSourceSettings $TeletextSourceSettings
 * @property TrackSourceSettings $TrackSourceSettings
 * @property WebvttHlsSourceSettings $WebvttHlsSourceSettings
 */
class CaptionSourceSettings extends Shape
{
    /**
     * @param array{
     *     AncillarySourceSettings?: AncillarySourceSettings,
     *     DvbSubSourceSettings?: DvbSubSourceSettings,
     *     EmbeddedSourceSettings?: EmbeddedSourceSettings,
     *     FileSourceSettings?: FileSourceSettings,
     *     SourceType?: 'ANCILLARY'|'DVB_SUB'|'EMBEDDED'|'SCTE20'|'SCC'|'TTML'|'STL'|'SRT'|'SMI'|'SMPTE_TT'|'TELETEXT'|'NULL_SOURCE'|'IMSC'|'WEBVTT',
     *     TeletextSourceSettings?: TeletextSourceSettings,
     *     TrackSourceSettings?: TrackSourceSettings,
     *     WebvttHlsSourceSettings?: WebvttHlsSourceSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
