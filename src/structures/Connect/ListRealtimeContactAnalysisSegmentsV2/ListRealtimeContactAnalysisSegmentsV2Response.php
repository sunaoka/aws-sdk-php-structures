<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'VOICE'|'CHAT' $Channel
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property list<Shapes\RealtimeContactAnalysisSegment> $Segments
 * @property string $NextToken
 */
class ListRealtimeContactAnalysisSegmentsV2Response extends Response
{
}
