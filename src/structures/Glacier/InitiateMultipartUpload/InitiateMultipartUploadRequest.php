<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $archiveDescription
 * @property string $partSize
 */
class InitiateMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     archiveDescription?: string,
     *     partSize?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
