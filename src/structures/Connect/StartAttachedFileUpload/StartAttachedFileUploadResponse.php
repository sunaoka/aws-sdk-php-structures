<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FileArn
 * @property string $FileId
 * @property string $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED' $FileStatus
 * @property Shapes\CreatedByInfo $CreatedBy
 * @property Shapes\UploadUrlMetadata $UploadUrlMetadata
 */
class StartAttachedFileUploadResponse extends Response
{
}
