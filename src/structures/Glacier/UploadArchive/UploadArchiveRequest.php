<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vaultName
 * @property string $accountId
 * @property string|null $archiveDescription
 * @property string|null $checksum
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $body
 */
class UploadArchiveRequest extends Request
{
    /**
     * @param array{
     *     vaultName: string,
     *     accountId: string,
     *     archiveDescription?: string|null,
     *     checksum?: string|null,
     *     body?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
