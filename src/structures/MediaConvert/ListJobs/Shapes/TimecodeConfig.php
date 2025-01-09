<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Anchor
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART' $Source
 * @property string $Start
 * @property string $TimestampOffset
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Anchor?: string,
     *     Source?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART',
     *     Start?: string,
     *     TimestampOffset?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
