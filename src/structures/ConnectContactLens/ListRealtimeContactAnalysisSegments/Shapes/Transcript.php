<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ParticipantId
 * @property string $ParticipantRole
 * @property string $Content
 * @property int<0, max> $BeginOffsetMillis
 * @property int<0, max> $EndOffsetMillis
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
     *     BeginOffsetMillis: int<0, max>,
     *     EndOffsetMillis: int<0, max>,
     *     Sentiment: 'POSITIVE'|'NEUTRAL'|'NEGATIVE',
     *     IssuesDetected?: list<IssueDetected>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
