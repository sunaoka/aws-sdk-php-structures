<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafGroupSettings|null $CmafGroupSettings
 * @property DashIsoGroupSettings|null $DashIsoGroupSettings
 * @property FileGroupSettings|null $FileGroupSettings
 * @property HlsGroupSettings|null $HlsGroupSettings
 * @property MsSmoothGroupSettings|null $MsSmoothGroupSettings
 * @property 'HLS_GROUP_SETTINGS'|'DASH_ISO_GROUP_SETTINGS'|'FILE_GROUP_SETTINGS'|'MS_SMOOTH_GROUP_SETTINGS'|'CMAF_GROUP_SETTINGS'|null $Type
 */
class OutputGroupSettings extends Shape
{
    /**
     * @param array{
     *     CmafGroupSettings?: CmafGroupSettings|null,
     *     DashIsoGroupSettings?: DashIsoGroupSettings|null,
     *     FileGroupSettings?: FileGroupSettings|null,
     *     HlsGroupSettings?: HlsGroupSettings|null,
     *     MsSmoothGroupSettings?: MsSmoothGroupSettings|null,
     *     Type?: 'HLS_GROUP_SETTINGS'|'DASH_ISO_GROUP_SETTINGS'|'FILE_GROUP_SETTINGS'|'MS_SMOOTH_GROUP_SETTINGS'|'CMAF_GROUP_SETTINGS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
