<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vaultName
 * @property string $accountId
 * @property string $archiveDescription
 * @property string $checksum
 * @property string $body
 */
class UploadArchiveRequest extends Request
{
    /**
     * @param array{
     *     vaultName: string,
     *     accountId: string,
     *     archiveDescription?: string,
     *     checksum?: string,
     *     body?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
