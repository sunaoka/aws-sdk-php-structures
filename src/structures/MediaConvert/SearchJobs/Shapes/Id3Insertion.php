<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id3
 * @property string|null $Timecode
 */
class Id3Insertion extends Shape
{
    /**
     * @param array{
     *     Id3?: string|null,
     *     Timecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
