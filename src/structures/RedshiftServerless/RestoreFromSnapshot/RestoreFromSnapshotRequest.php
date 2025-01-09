<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminPasswordSecretKmsKeyId
 * @property bool $manageAdminPassword
 * @property string $namespaceName
 * @property string $ownerAccount
 * @property string $snapshotArn
 * @property string $snapshotName
 * @property string $workgroupName
 */
class RestoreFromSnapshotRequest extends Request
{
    /**
     * @param array{
     *     adminPasswordSecretKmsKeyId?: string,
     *     manageAdminPassword?: bool,
     *     namespaceName: string,
     *     ownerAccount?: string,
     *     snapshotArn?: string,
     *     snapshotName?: string,
     *     workgroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
