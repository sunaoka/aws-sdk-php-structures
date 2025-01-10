<?php

namespace Sunaoka\Aws\Structures\Omics\UploadReadSetPart;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property int<1, 10000> $partNumber
 * @property string|resource|\Psr\Http\Message\StreamInterface $payload
 */
class UploadReadSetPartRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     partNumber: int<1, 10000>,
     *     payload: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
