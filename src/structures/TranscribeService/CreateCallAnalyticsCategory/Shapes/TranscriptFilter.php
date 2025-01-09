<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXACT' $TranscriptFilterType
 * @property AbsoluteTimeRange $AbsoluteTimeRange
 * @property RelativeTimeRange $RelativeTimeRange
 * @property 'AGENT'|'CUSTOMER' $ParticipantRole
 * @property bool $Negate
 * @property list<string> $Targets
 */
class TranscriptFilter extends Shape
{
    /**
     * @param array{
     *     TranscriptFilterType: 'EXACT',
     *     AbsoluteTimeRange?: AbsoluteTimeRange,
     *     RelativeTimeRange?: RelativeTimeRange,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER',
     *     Negate?: bool,
     *     Targets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
