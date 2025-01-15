<?php

namespace Sunaoka\Aws\Structures\WorkDocs\InitiateDocumentVersionUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string|null $Id
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $ContentCreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ContentModifiedTimestamp
 * @property string|null $ContentType
 * @property int|null $DocumentSizeInBytes
 * @property string|null $ParentFolderId
 */
class InitiateDocumentVersionUploadRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     ContentCreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ContentModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ContentType?: string|null,
     *     DocumentSizeInBytes?: int|null,
     *     ParentFolderId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
