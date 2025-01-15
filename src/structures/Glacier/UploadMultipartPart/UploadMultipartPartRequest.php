<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadMultipartPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 * @property string|null $checksum
 * @property string|null $range
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $body
 */
class UploadMultipartPartRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string,
     *     checksum?: string|null,
     *     range?: string|null,
     *     body?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
