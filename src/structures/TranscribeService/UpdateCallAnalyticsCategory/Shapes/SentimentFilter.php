<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'> $Sentiments
 * @property AbsoluteTimeRange $AbsoluteTimeRange
 * @property RelativeTimeRange $RelativeTimeRange
 * @property 'AGENT'|'CUSTOMER' $ParticipantRole
 * @property bool $Negate
 */
class SentimentFilter extends Shape
{
    /**
     * @param array{
     *     Sentiments: list<'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'>,
     *     AbsoluteTimeRange?: AbsoluteTimeRange,
     *     RelativeTimeRange?: RelativeTimeRange,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER',
     *     Negate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
