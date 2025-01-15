<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListCallAnalyticsCategories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'> $Sentiments
 * @property AbsoluteTimeRange|null $AbsoluteTimeRange
 * @property RelativeTimeRange|null $RelativeTimeRange
 * @property 'AGENT'|'CUSTOMER'|null $ParticipantRole
 * @property bool|null $Negate
 */
class SentimentFilter extends Shape
{
    /**
     * @param array{
     *     Sentiments: list<'POSITIVE'|'NEGATIVE'|'NEUTRAL'|'MIXED'>,
     *     AbsoluteTimeRange?: AbsoluteTimeRange|null,
     *     RelativeTimeRange?: RelativeTimeRange|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|null,
     *     Negate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
