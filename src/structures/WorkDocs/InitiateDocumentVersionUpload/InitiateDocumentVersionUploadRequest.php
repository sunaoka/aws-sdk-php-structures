<?php

namespace Sunaoka\Aws\Structures\WorkDocs\InitiateDocumentVersionUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $Id
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $ContentCreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ContentModifiedTimestamp
 * @property string $ContentType
 * @property int $DocumentSizeInBytes
 * @property string $ParentFolderId
 */
class InitiateDocumentVersionUploadRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     Id?: string,
     *     Name?: string,
     *     ContentCreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ContentModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     ContentType?: string,
     *     DocumentSizeInBytes?: int,
     *     ParentFolderId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
