<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $namespaceName
 * @property string|null $ownerAccount
 * @property string|null $snapshotArn
 * @property string|null $snapshotName
 * @property string $workgroupName
 */
class RestoreFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     namespaceName: string,
     *     ownerAccount?: string|null,
     *     snapshotArn?: string|null,
     *     snapshotName?: string|null,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
