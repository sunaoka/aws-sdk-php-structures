<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetHLSStreamingSessionURL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP'|null $FragmentSelectorType
 * @property HLSTimestampRange|null $TimestampRange
 */
class HLSFragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType?: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP'|null,
     *     TimestampRange?: HLSTimestampRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
