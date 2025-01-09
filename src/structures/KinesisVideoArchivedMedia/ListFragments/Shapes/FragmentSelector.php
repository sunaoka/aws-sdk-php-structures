<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP' $FragmentSelectorType
 * @property TimestampRange $TimestampRange
 */
class FragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType: 'PRODUCER_TIMESTAMP'|'SERVER_TIMESTAMP',
     *     TimestampRange: TimestampRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
