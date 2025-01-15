<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ownerAccount
 * @property string|null $snapshotArn
 * @property string|null $snapshotName
 */
class GetSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ownerAccount?: string|null,
     *     snapshotArn?: string|null,
     *     snapshotName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
