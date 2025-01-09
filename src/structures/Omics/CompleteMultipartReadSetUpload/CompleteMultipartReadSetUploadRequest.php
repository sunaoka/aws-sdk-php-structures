<?php

namespace Sunaoka\Aws\Structures\Omics\CompleteMultipartReadSetUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property list<Shapes\CompleteReadSetUploadPartListItem> $parts
 */
class CompleteMultipartReadSetUploadRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string,
     *     parts: list<Shapes\CompleteReadSetUploadPartListItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
