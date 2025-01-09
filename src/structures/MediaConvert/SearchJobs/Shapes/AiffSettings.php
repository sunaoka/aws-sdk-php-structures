<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BitDepth
 * @property int $Channels
 * @property int $SampleRate
 */
class AiffSettings extends Shape
{
    /**
     * @param array{
     *     BitDepth?: int,
     *     Channels?: int,
     *     SampleRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
