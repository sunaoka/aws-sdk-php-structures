<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE' $DurationMode
 * @property int $MaxAncDataSize
 */
class MxfXavcProfileSettings extends Shape
{
    /**
     * @param array{
     *     DurationMode?: 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE',
     *     MaxAncDataSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
