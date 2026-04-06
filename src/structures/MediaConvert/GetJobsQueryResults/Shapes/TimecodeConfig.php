<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Anchor
 * @property 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null $Source
 * @property string|null $Start
 * @property string|null $TimestampOffset
 */
class TimecodeConfig extends Shape
{
    /**
     * @param array{
     *     Anchor?: string|null,
     *     Source?: 'EMBEDDED'|'ZEROBASED'|'SPECIFIEDSTART'|null,
     *     Start?: string|null,
     *     TimestampOffset?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
