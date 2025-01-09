<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property string $ParticipantRole
 * @property string $Content
 * @property int $BeginOffsetMillis
 * @property int $EndOffsetMillis
 * @property 'POSITIVE'|'NEUTRAL'|'NEGATIVE' $Sentiment
 * @property list<IssueDetected> $IssuesDetected
 */
class Transcript extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParticipantId: string,
     *     ParticipantRole: string,
     *     Content: string,
     *     BeginOffsetMillis: int,
     *     EndOffsetMillis: int,
     *     Sentiment: 'POSITIVE'|'NEUTRAL'|'NEGATIVE',
     *     IssuesDetected?: list<IssueDetected>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
