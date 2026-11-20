<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property list<'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE'|'EMAIL_MESSAGE_PLAIN_TEXT'|'EMAIL_MESSAGE_PLAIN_TEXT_REDACTED'|'EMAIL_MESSAGE_REDACTED'|'VOICEMAIL_RECORDING'|'VOICEMAIL_RECORDING_REDACTED'|'VOICEMAIL_ANALYSIS'|'VOICEMAIL_ANALYSIS_REDACTED'> $ReferenceTypes
 * @property string|null $NextToken
 */
class ListContactReferencesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ReferenceTypes: list<'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE'|'EMAIL_MESSAGE_PLAIN_TEXT'|'EMAIL_MESSAGE_PLAIN_TEXT_REDACTED'|'EMAIL_MESSAGE_REDACTED'|'VOICEMAIL_RECORDING'|'VOICEMAIL_RECORDING_REDACTED'|'VOICEMAIL_ANALYSIS'|'VOICEMAIL_ANALYSIS_REDACTED'>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
