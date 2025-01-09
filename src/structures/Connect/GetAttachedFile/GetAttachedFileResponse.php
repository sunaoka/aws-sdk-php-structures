<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FileArn
 * @property string $FileId
 * @property string $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED' $FileStatus
 * @property string $FileName
 * @property int $FileSizeInBytes
 * @property string $AssociatedResourceArn
 * @property 'EMAIL_MESSAGE'|'ATTACHMENT' $FileUseCaseType
 * @property Shapes\CreatedByInfo $CreatedBy
 * @property Shapes\DownloadUrlMetadata $DownloadUrlMetadata
 * @property array<string, string> $Tags
 */
class GetAttachedFileResponse extends Response
{
}
