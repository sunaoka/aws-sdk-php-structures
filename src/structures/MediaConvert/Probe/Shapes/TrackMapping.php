<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $AudioTrackIndexes
 * @property list<int>|null $DataTrackIndexes
 * @property list<int>|null $VideoTrackIndexes
 */
class TrackMapping extends Shape
{
    /**
     * @param array{
     *     AudioTrackIndexes?: list<int>|null,
     *     DataTrackIndexes?: list<int>|null,
     *     VideoTrackIndexes?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
