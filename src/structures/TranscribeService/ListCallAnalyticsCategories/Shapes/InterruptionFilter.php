<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 14400000> $Threshold
 * @property 'AGENT'|'CUSTOMER' $ParticipantRole
 * @property AbsoluteTimeRange $AbsoluteTimeRange
 * @property RelativeTimeRange $RelativeTimeRange
 * @property bool $Negate
 */
class InterruptionFilter extends Shape
{
    /**
     * @param array{
     *     Threshold?: int<0, 14400000>,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER',
     *     AbsoluteTimeRange?: AbsoluteTimeRange,
     *     RelativeTimeRange?: RelativeTimeRange,
     *     Negate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
