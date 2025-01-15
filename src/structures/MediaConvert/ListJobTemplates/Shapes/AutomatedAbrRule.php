<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AllowedRenditionSize>|null $AllowedRenditions
 * @property list<ForceIncludeRenditionSize>|null $ForceIncludeRenditions
 * @property MinBottomRenditionSize|null $MinBottomRenditionSize
 * @property MinTopRenditionSize|null $MinTopRenditionSize
 * @property 'MIN_TOP_RENDITION_SIZE'|'MIN_BOTTOM_RENDITION_SIZE'|'FORCE_INCLUDE_RENDITIONS'|'ALLOWED_RENDITIONS'|null $Type
 */
class AutomatedAbrRule extends Shape
{
    /**
     * @param array{
     *     AllowedRenditions?: list<AllowedRenditionSize>|null,
     *     ForceIncludeRenditions?: list<ForceIncludeRenditionSize>|null,
     *     MinBottomRenditionSize?: MinBottomRenditionSize|null,
     *     MinTopRenditionSize?: MinTopRenditionSize|null,
     *     Type?: 'MIN_TOP_RENDITION_SIZE'|'MIN_BOTTOM_RENDITION_SIZE'|'FORCE_INCLUDE_RENDITIONS'|'ALLOWED_RENDITIONS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
