<?php

namespace Sunaoka\Aws\Structures\EBS\GetSnapshotBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int $BlockIndex
 * @property string $BlockToken
 */
class GetSnapshotBlockRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     BlockIndex: int,
     *     BlockToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
