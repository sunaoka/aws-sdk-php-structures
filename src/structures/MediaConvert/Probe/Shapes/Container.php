<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Duration
 * @property 'mp4'|'quicktime'|'matroska'|'webm'|'mxf'|null $Format
 * @property list<Track>|null $Tracks
 */
class Container extends Shape
{
    /**
     * @param array{
     *     Duration?: double|null,
     *     Format?: 'mp4'|'quicktime'|'matroska'|'webm'|'mxf'|null,
     *     Tracks?: list<Track>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
