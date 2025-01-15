<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AbortDocumentVersionUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 */
class AbortDocumentVersionUploadRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     VersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
