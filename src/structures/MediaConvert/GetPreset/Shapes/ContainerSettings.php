<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmfcSettings $CmfcSettings
 * @property 'F4V'|'ISMV'|'M2TS'|'M3U8'|'CMFC'|'MOV'|'MP4'|'MPD'|'MXF'|'OGG'|'WEBM'|'RAW'|'Y4M' $Container
 * @property F4vSettings $F4vSettings
 * @property M2tsSettings $M2tsSettings
 * @property M3u8Settings $M3u8Settings
 * @property MovSettings $MovSettings
 * @property Mp4Settings $Mp4Settings
 * @property MpdSettings $MpdSettings
 * @property MxfSettings $MxfSettings
 */
class ContainerSettings extends Shape
{
    /**
     * @param array{
     *     CmfcSettings?: CmfcSettings,
     *     Container?: 'F4V'|'ISMV'|'M2TS'|'M3U8'|'CMFC'|'MOV'|'MP4'|'MPD'|'MXF'|'OGG'|'WEBM'|'RAW'|'Y4M',
     *     F4vSettings?: F4vSettings,
     *     M2tsSettings?: M2tsSettings,
     *     M3u8Settings?: M3u8Settings,
     *     MovSettings?: MovSettings,
     *     Mp4Settings?: Mp4Settings,
     *     MpdSettings?: MpdSettings,
     *     MxfSettings?: MxfSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
