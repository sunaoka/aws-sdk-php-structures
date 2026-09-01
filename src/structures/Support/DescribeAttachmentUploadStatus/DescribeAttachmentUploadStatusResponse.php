<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachmentUploadStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'attachment-ready'|'attachment-not-ready'|'failed' $uploadStatus
 * @property string $fileName
 * @property Shapes\UploadProgress|null $uploadProgress
 */
class DescribeAttachmentUploadStatusResponse extends Response
{
}
