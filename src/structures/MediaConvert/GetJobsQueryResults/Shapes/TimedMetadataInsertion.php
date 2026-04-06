<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Id3Insertion>|null $Id3Insertions
 */
class TimedMetadataInsertion extends Shape
{
    /**
     * @param array{Id3Insertions?: list<Id3Insertion>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
