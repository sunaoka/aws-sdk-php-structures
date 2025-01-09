<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AllowedRenditionSize> $AllowedRenditions
 * @property list<ForceIncludeRenditionSize> $ForceIncludeRenditions
 * @property MinBottomRenditionSize $MinBottomRenditionSize
 * @property MinTopRenditionSize $MinTopRenditionSize
 * @property 'MIN_TOP_RENDITION_SIZE'|'MIN_BOTTOM_RENDITION_SIZE'|'FORCE_INCLUDE_RENDITIONS'|'ALLOWED_RENDITIONS' $Type
 */
class AutomatedAbrRule extends Shape
{
    /**
     * @param array{
     *     AllowedRenditions?: list<AllowedRenditionSize>,
     *     ForceIncludeRenditions?: list<ForceIncludeRenditionSize>,
     *     MinBottomRenditionSize?: MinBottomRenditionSize,
     *     MinTopRenditionSize?: MinTopRenditionSize,
     *     Type?: 'MIN_TOP_RENDITION_SIZE'|'MIN_BOTTOM_RENDITION_SIZE'|'FORCE_INCLUDE_RENDITIONS'|'ALLOWED_RENDITIONS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
