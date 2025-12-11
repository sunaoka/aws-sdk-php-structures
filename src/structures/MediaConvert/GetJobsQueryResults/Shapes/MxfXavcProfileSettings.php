<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE'|null $DurationMode
 * @property int<0, 2147483647>|null $MaxAncDataSize
 */
class MxfXavcProfileSettings extends Shape
{
    /**
     * @param array{
     *     DurationMode?: 'ALLOW_ANY_DURATION'|'DROP_FRAMES_FOR_COMPLIANCE'|null,
     *     MaxAncDataSize?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
