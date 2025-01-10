<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadMultipartPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 * @property string $checksum
 * @property string $range
 * @property string|resource|\Psr\Http\Message\StreamInterface $body
 */
class UploadMultipartPartRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string,
     *     checksum?: string,
     *     range?: string,
     *     body?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
