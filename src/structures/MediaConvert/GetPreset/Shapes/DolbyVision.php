<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DolbyVisionLevel6Metadata $L6Metadata
 * @property 'PASSTHROUGH'|'RECALCULATE'|'SPECIFY' $L6Mode
 * @property 'HDR10_NOMAP'|'HDR10_1000' $Mapping
 * @property 'PROFILE_5'|'PROFILE_8_1' $Profile
 */
class DolbyVision extends Shape
{
    /**
     * @param array{
     *     L6Metadata?: DolbyVisionLevel6Metadata,
     *     L6Mode?: 'PASSTHROUGH'|'RECALCULATE'|'SPECIFY',
     *     Mapping?: 'HDR10_NOMAP'|'HDR10_1000',
     *     Profile?: 'PROFILE_5'|'PROFILE_8_1'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
