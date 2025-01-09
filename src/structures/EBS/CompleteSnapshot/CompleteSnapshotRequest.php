<?php

namespace Sunaoka\Aws\Structures\EBS\CompleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int<0, max> $ChangedBlocksCount
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 * @property 'LINEAR' $ChecksumAggregationMethod
 */
class CompleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     ChangedBlocksCount: int<0, max>,
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
