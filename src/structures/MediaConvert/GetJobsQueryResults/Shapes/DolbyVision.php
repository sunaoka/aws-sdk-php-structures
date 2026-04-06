<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DUPLICATE_STREAM'|'SUPPLEMENTAL_CODECS'|null $Compatibility
 * @property DolbyVisionLevel6Metadata|null $L6Metadata
 * @property 'PASSTHROUGH'|'RECALCULATE'|'SPECIFY'|null $L6Mode
 * @property 'HDR10_NOMAP'|'HDR10_1000'|null $Mapping
 * @property 'PROFILE_5'|'PROFILE_8_1'|null $Profile
 */
class DolbyVision extends Shape
{
    /**
     * @param array{
     *     Compatibility?: 'DUPLICATE_STREAM'|'SUPPLEMENTAL_CODECS'|null,
     *     L6Metadata?: DolbyVisionLevel6Metadata|null,
     *     L6Mode?: 'PASSTHROUGH'|'RECALCULATE'|'SPECIFY'|null,
     *     Mapping?: 'HDR10_NOMAP'|'HDR10_1000'|null,
     *     Profile?: 'PROFILE_5'|'PROFILE_8_1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
