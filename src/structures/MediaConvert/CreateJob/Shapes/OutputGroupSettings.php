<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafGroupSettings $CmafGroupSettings
 * @property DashIsoGroupSettings $DashIsoGroupSettings
 * @property FileGroupSettings $FileGroupSettings
 * @property HlsGroupSettings $HlsGroupSettings
 * @property MsSmoothGroupSettings $MsSmoothGroupSettings
 * @property 'HLS_GROUP_SETTINGS'|'DASH_ISO_GROUP_SETTINGS'|'FILE_GROUP_SETTINGS'|'MS_SMOOTH_GROUP_SETTINGS'|'CMAF_GROUP_SETTINGS' $Type
 */
class OutputGroupSettings extends Shape
{
    /**
     * @param array{
     *     CmafGroupSettings?: CmafGroupSettings,
     *     DashIsoGroupSettings?: DashIsoGroupSettings,
     *     FileGroupSettings?: FileGroupSettings,
     *     HlsGroupSettings?: HlsGroupSettings,
     *     MsSmoothGroupSettings?: MsSmoothGroupSettings,
     *     Type?: 'HLS_GROUP_SETTINGS'|'DASH_ISO_GROUP_SETTINGS'|'FILE_GROUP_SETTINGS'|'MS_SMOOTH_GROUP_SETTINGS'|'CMAF_GROUP_SETTINGS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
