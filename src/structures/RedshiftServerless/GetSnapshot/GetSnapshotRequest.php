<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ownerAccount
 * @property string $snapshotArn
 * @property string $snapshotName
 */
class GetSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ownerAccount?: string,
     *     snapshotArn?: string,
     *     snapshotName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
