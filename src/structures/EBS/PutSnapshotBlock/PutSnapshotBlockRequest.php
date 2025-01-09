<?php

namespace Sunaoka\Aws\Structures\EBS\PutSnapshotBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int $BlockIndex
 * @property string $BlockData
 * @property int $DataLength
 * @property int $Progress
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 */
class PutSnapshotBlockRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     BlockIndex: int,
     *     BlockData: string,
     *     DataLength: int,
     *     Progress?: int,
     *     Checksum: string,
     *     ChecksumAlgorithm: 'SHA256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
