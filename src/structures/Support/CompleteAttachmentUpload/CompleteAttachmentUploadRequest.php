<?php

namespace Sunaoka\Aws\Structures\Support\CompleteAttachmentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $uploadId
 * @property list<Shapes\CompletedUpload> $completedUploads
 * @property bool|null $dryRun
 */
class CompleteAttachmentUploadRequest extends Request
{
    /**
     * @param array{
     *     uploadId: string,
     *     completedUploads: list<Shapes\CompletedUpload>,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
