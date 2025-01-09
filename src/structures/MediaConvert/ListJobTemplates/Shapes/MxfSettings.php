<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_COPY'|'COPY_FROM_VIDEO' $AfdSignaling
 * @property 'D_10'|'XDCAM'|'OP1A'|'XAVC'|'XDCAM_RDD9' $Profile
 * @property MxfXavcProfileSettings $XavcProfileSettings
 */
class MxfSettings extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'NO_COPY'|'COPY_FROM_VIDEO',
     *     Profile?: 'D_10'|'XDCAM'|'OP1A'|'XAVC'|'XDCAM_RDD9',
     *     XavcProfileSettings?: MxfXavcProfileSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
