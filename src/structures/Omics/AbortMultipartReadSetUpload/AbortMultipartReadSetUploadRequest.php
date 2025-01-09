<?php

namespace Sunaoka\Aws\Structures\Omics\AbortMultipartReadSetUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 */
class AbortMultipartReadSetUploadRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
