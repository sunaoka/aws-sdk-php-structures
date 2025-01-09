<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE' $DurationMode
 * @property int<0, 2147483647> $MaxAncDataSize
 */
class MxfXavcProfileSettings extends Shape
{
    /**
     * @param array{
     *     DurationMode?: 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE',
     *     MaxAncDataSize?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
