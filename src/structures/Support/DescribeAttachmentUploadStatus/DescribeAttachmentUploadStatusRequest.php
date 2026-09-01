<?php

namespace Sunaoka\Aws\Structures\Support\DescribeAttachmentUploadStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $uploadId
 * @property bool|null $dryRun
 */
class DescribeAttachmentUploadStatusRequest extends Request
{
    /**
     * @param array{
     *     uploadId: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
