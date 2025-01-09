<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ProducerTimestamp'|'ServerTimestamp' $FragmentSelectorType
 * @property TimestampRange $TimestampRange
 */
class FragmentSelector extends Shape
{
    /**
     * @param array{
     *     FragmentSelectorType: 'ProducerTimestamp'|'ServerTimestamp',
     *     TimestampRange: TimestampRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
