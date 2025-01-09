<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetClip\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP' $FragmentSelectorType
 * @property ClipTimestampRange $TimestampRange
 */
class ClipFragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP',
     *     TimestampRange: ClipTimestampRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
