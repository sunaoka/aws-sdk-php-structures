<?php

namespace Sunaoka\Aws\Structures\Connect\ListInstanceStorageConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'CHAT_TRANSCRIPTS'|'CALL_RECORDINGS'|'SCHEDULED_REPORTS'|'MEDIA_STREAMS'|'CONTACT_TRACE_RECORDS'|'AGENT_EVENTS'|'REAL_TIME_CONTACT_ANALYSIS_SEGMENTS'|'ATTACHMENTS'|'CONTACT_EVALUATIONS'|'SCREEN_RECORDINGS' $ResourceType
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListInstanceStorageConfigsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceType: 'CHAT_TRANSCRIPTS'|'CALL_RECORDINGS'|'SCHEDULED_REPORTS'|'MEDIA_STREAMS'|'CONTACT_TRACE_RECORDS'|'AGENT_EVENTS'|'REAL_TIME_CONTACT_ANALYSIS_SEGMENTS'|'ATTACHMENTS'|'CONTACT_EVALUATIONS'|'SCREEN_RECORDINGS',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
