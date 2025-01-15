<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXACT' $TranscriptFilterType
 * @property AbsoluteTimeRange|null $AbsoluteTimeRange
 * @property RelativeTimeRange|null $RelativeTimeRange
 * @property 'AGENT'|'CUSTOMER'|null $ParticipantRole
 * @property bool|null $Negate
 * @property list<string> $Targets
 */
class TranscriptFilter extends Shape
{
    /**
     * @param array{
     *     TranscriptFilterType: 'EXACT',
     *     AbsoluteTimeRange?: AbsoluteTimeRange|null,
     *     RelativeTimeRange?: RelativeTimeRange|null,
     *     ParticipantRole?: 'AGENT'|'CUSTOMER'|null,
     *     Negate?: bool|null,
     *     Targets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
