<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAttachedFile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $InstanceId
 * @property 'CONTACT_ANALYSIS'|'EMAIL_MESSAGE'|'EMAIL_MESSAGE_PLAIN_TEXT'|'EMAIL_MESSAGE_REDACTED'|'EMAIL_MESSAGE_PLAIN_TEXT_REDACTED'|'ATTACHMENT'|'VOICE_RECORDING'|'VOICEMAIL_RECORDING'|'VOICEMAIL_RECORDING_REDACTED'|'VOICEMAIL_ANALYSIS'|'VOICEMAIL_ANALYSIS_REDACTED' $FileUseCaseType
 * @property string $FileSourceUri
 * @property string $AssociatedResourceArn
 * @property array<string, string>|null $Tags
 */
class CreateAttachedFileRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InstanceId: string,
     *     FileUseCaseType: 'CONTACT_ANALYSIS'|'EMAIL_MESSAGE'|'EMAIL_MESSAGE_PLAIN_TEXT'|'EMAIL_MESSAGE_REDACTED'|'EMAIL_MESSAGE_PLAIN_TEXT_REDACTED'|'ATTACHMENT'|'VOICE_RECORDING'|'VOICEMAIL_RECORDING'|'VOICEMAIL_RECORDING_REDACTED'|'VOICEMAIL_ANALYSIS'|'VOICEMAIL_ANALYSIS_REDACTED',
     *     FileSourceUri: string,
     *     AssociatedResourceArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
