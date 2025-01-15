<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_COPY'|'COPY_FROM_VIDEO'|null $AfdSignaling
 * @property 'D_10'|'XDCAM'|'OP1A'|'XAVC'|'XDCAM_RDD9'|null $Profile
 * @property MxfXavcProfileSettings|null $XavcProfileSettings
 */
class MxfSettings extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'NO_COPY'|'COPY_FROM_VIDEO'|null,
     *     Profile?: 'D_10'|'XDCAM'|'OP1A'|'XAVC'|'XDCAM_RDD9'|null,
     *     XavcProfileSettings?: MxfXavcProfileSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
