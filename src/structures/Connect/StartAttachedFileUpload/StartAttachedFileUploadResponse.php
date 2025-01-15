<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FileArn
 * @property string|null $FileId
 * @property string|null $CreationTime
 * @property 'APPROVED'|'REJECTED'|'PROCESSING'|'FAILED'|null $FileStatus
 * @property Shapes\CreatedByInfo|null $CreatedBy
 * @property Shapes\UploadUrlMetadata|null $UploadUrlMetadata
 */
class StartAttachedFileUploadResponse extends Response
{
}
