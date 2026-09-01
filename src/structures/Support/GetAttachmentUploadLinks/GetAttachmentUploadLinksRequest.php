<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentUploadLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileName
 * @property int<1, 157286400>|null $fileSizeBytes
 * @property string|null $uploadId
 * @property Shapes\UploadRange|null $uploadRange
 * @property bool|null $dryRun
 */
class GetAttachmentUploadLinksRequest extends Request
{
    /**
     * @param array{
     *     fileName: string,
     *     fileSizeBytes?: int<1, 157286400>|null,
     *     uploadId?: string|null,
     *     uploadRange?: Shapes\UploadRange|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
