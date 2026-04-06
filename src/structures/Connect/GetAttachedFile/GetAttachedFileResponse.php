<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileArn
 * @property string|null $FileId
 * @property string|null $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|null $FileStatus
 * @property string|null $FileName
 * @property int<1, max> $FileSizeInBytes
 * @property string|null $AssociatedResourceArn
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT'|null $FileUseCaseType
 * @property Shapes\CreatedByInfo|null $CreatedBy
 * @property Shapes\DownloadUrlMetadata|null $DownloadUrlMetadata
 * @property array<string, string>|null $Tags
 */
class GetAttachedFileResponse extends Response
{
}
