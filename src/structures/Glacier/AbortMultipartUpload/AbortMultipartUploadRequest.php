<?php

namespace Sunaoka\Aws\Structures\Glacier\AbortMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 */
class AbortMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
