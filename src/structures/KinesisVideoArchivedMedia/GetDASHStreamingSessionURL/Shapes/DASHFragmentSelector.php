<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP' $FragmentSelectorType
 * @property DASHTimestampRange $TimestampRange
 */
class DASHFragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType?: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP',
     *     TimestampRange?: DASHTimestampRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
