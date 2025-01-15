<?php

namespace Sunaoka\Aws\Structures\EBS\PutSnapshotBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int<0, max> $BlockIndex
 * @property string|resource|\Psr\Http\Message\StreamInterface $BlockData
 * @property int $DataLength
 * @property int<0, 100>|null $Progress
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 */
class PutSnapshotBlockRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     BlockIndex: int<0, max>,
     *     BlockData: string|resource|\Psr\Http\Message\StreamInterface,
     *     DataLength: int,
     *     Progress?: int<0, 100>|null,
     *     Checksum: string,
     *     ChecksumAlgorithm: 'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
