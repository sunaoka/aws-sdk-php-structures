<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 14400000>|null $Threshold
 * @property 'AGENT'|'CUSTOMER'|null $ParticipantRole
 * @property AbsoluteTimeRange|null $AbsoluteTimeRange
 * @property RelativeTimeRange|null $RelativeTimeRange
 * @property bool|null $Negate
 */
class InterruptionFilter extends Shape
{
    /**
     * @param array{
     *     Threshold?: int<0, 14400000>|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|null,
     *     AbsoluteTimeRange?: AbsoluteTimeRange|null,
     *     RelativeTimeRange?: RelativeTimeRange|null,
     *     Negate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
