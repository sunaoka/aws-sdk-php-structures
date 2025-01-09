<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'Raw'|'Redacted' $OutputType
 * @property list<'Transcript'|'Categories'|'Issues'|'Event'|'Attachments'|'PostContactSummary'> $SegmentTypes
 */
class ListRealtimeContactAnalysisSegmentsV2Request extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     OutputType: 'Raw'|'Redacted',
     *     SegmentTypes: list<'Transcript'|'Categories'|'Issues'|'Event'|'Attachments'|'PostContactSummary'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
