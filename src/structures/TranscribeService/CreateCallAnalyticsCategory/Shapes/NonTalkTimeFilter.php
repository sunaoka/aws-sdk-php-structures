<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 14400000>|null $Threshold
 * @property AbsoluteTimeRange|null $AbsoluteTimeRange
 * @property RelativeTimeRange|null $RelativeTimeRange
 * @property bool|null $Negate
 */
class NonTalkTimeFilter extends Shape
{
    /**
     * @param array{
     *     Threshold?: int<0, 14400000>|null,
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
