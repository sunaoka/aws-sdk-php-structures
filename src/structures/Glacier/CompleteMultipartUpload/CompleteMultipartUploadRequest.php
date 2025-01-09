<?php

namespace Sunaoka\Aws\Structures\Glacier\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 * @property string $archiveSize
 * @property string $checksum
 */
class CompleteMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string,
     *     archiveSize?: string,
     *     checksum?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
