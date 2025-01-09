<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Threshold
 * @property AbsoluteTimeRange $AbsoluteTimeRange
 * @property RelativeTimeRange $RelativeTimeRange
 * @property bool $Negate
 */
class NonTalkTimeFilter extends Shape
{
    /**
     * @param array{
     *     Threshold?: int,
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
