<?php

namespace Sunaoka\Aws\Structures\EBS\CompleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int $ChangedBlocksCount
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 * @property 'LINEAR' $ChecksumAggregationMethod
 */
class CompleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     ChangedBlocksCount: int,
     *     Checksum?: string,
     *     ChecksumAlgorithm?: 'SHA256',
     *     ChecksumAggregationMethod?: 'LINEAR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
