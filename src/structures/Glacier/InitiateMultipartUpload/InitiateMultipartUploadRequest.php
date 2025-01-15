<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateMultipartUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string|null $archiveDescription
 * @property string|null $partSize
 */
class InitiateMultipartUploadRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     archiveDescription?: string|null,
     *     partSize?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
