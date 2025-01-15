<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP'|null $FragmentSelectorType
 * @property DASHTimestampRange|null $TimestampRange
 */
class DASHFragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType?: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP'|null,
     *     TimestampRange?: DASHTimestampRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
