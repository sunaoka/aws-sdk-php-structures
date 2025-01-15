<?php

namespace Sunaoka\Aws\Structures\Glacier\CompleteMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 * @property string|null $archiveSize
 * @property string|null $checksum
 */
class CompleteMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string,
     *     archiveSize?: string|null,
     *     checksum?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
