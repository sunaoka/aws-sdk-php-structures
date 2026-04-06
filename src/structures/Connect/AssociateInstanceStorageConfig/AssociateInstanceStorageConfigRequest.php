<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateInstanceStorageConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'CHAT_TRANSCRIPTS'|'CALL_RECORDINGS'|'SCHEDULED_REPORTS'|'MEDIA_STREAMS'|'CONTACT_TRACE_RECORDS'|'AGENT_EVENTS'|'REAL_TIME_CONTACT_ANALYSIS_SEGMENTS'|'ATTACHMENTS'|'CONTACT_EVALUATIONS'|'SCREEN_RECORDINGS' $ResourceType
 * @property Shapes\InstanceStorageConfig $StorageConfig
 */
class AssociateInstanceStorageConfigRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceType: 'CHAT_TRANSCRIPTS'|'CALL_RECORDINGS'|'SCHEDULED_REPORTS'|'MEDIA_STREAMS'|'CONTACT_TRACE_RECORDS'|'AGENT_EVENTS'|'REAL_TIME_CONTACT_ANALYSIS_SEGMENTS'|'ATTACHMENTS'|'CONTACT_EVALUATIONS'|'SCREEN_RECORDINGS',
     *     StorageConfig: Shapes\InstanceStorageConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
