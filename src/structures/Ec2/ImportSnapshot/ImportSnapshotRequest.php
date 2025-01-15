<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClientData|null $ClientData
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property Shapes\SnapshotDiskContainer|null $DiskContainer
 * @property bool|null $DryRun
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string|null $RoleName
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class ImportSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientData?: Shapes\ClientData|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     DiskContainer?: Shapes\SnapshotDiskContainer|null,
     *     DryRun?: bool|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     RoleName?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
