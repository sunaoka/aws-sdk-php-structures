<?php

namespace Sunaoka\Aws\Structures\EBS\CompleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int<0, max> $ChangedBlocksCount
 * @property string|null $Checksum
 * @property 'SHA256'|null $ChecksumAlgorithm
 * @property 'LINEAR'|null $ChecksumAggregationMethod
 */
class CompleteSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     ChangedBlocksCount: int<0, max>,
     *     Checksum?: string|null,
     *     ChecksumAlgorithm?: 'SHA256'|null,
     *     ChecksumAggregationMethod?: 'LINEAR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
