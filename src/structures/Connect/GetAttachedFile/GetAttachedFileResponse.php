<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileArn
 * @property string|null $FileId
 * @property string|null $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|'DRAFTING'|null $FileStatus
 * @property string|null $FileName
 * @property int<1, max> $FileSizeInBytes
 * @property string|null $AssociatedResourceArn
 * @property 'CONTACT_ANALYSIS'|'EMAIL_MESSAGE'|'EMAIL_MESSAGE_PLAIN_TEXT'|'EMAIL_MESSAGE_REDACTED'|'EMAIL_MESSAGE_PLAIN_TEXT_REDACTED'|'ATTACHMENT'|'VOICE_RECORDING'|'VOICEMAIL_RECORDING'|'VOICEMAIL_RECORDING_REDACTED'|'VOICEMAIL_ANALYSIS'|'VOICEMAIL_ANALYSIS_REDACTED'|null $FileUseCaseType
 * @property Shapes\CreatedByInfo|null $CreatedBy
 * @property Shapes\DownloadUrlMetadata|null $DownloadUrlMetadata
 * @property array<string, string>|null $Tags
 */
class GetAttachedFileResponse extends Response
{
}
