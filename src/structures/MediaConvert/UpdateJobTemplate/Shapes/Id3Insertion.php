<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id3
 * @property string $Timecode
 */
class Id3Insertion extends Shape
{
    /**
     * @param array{
     *     Id3?: string,
     *     Timecode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
