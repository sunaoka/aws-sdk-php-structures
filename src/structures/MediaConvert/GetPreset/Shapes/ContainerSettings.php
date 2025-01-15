<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmfcSettings|null $CmfcSettings
 * @property 'F4V'|'ISMV'|'M2TS'|'M3U8'|'CMFC'|'MOV'|'MP4'|'MPD'|'MXF'|'OGG'|'WEBM'|'RAW'|'Y4M'|null $Container
 * @property F4vSettings|null $F4vSettings
 * @property M2tsSettings|null $M2tsSettings
 * @property M3u8Settings|null $M3u8Settings
 * @property MovSettings|null $MovSettings
 * @property Mp4Settings|null $Mp4Settings
 * @property MpdSettings|null $MpdSettings
 * @property MxfSettings|null $MxfSettings
 */
class ContainerSettings extends Shape
{
    /**
     * @param array{
     *     CmfcSettings?: CmfcSettings|null,
     *     Container?: 'F4V'|'ISMV'|'M2TS'|'M3U8'|'CMFC'|'MOV'|'MP4'|'MPD'|'MXF'|'OGG'|'WEBM'|'RAW'|'Y4M'|null,
     *     F4vSettings?: F4vSettings|null,
     *     M2tsSettings?: M2tsSettings|null,
     *     M3u8Settings?: M3u8Settings|null,
     *     MovSettings?: MovSettings|null,
     *     Mp4Settings?: Mp4Settings|null,
     *     MpdSettings?: MpdSettings|null,
     *     MxfSettings?: MxfSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
