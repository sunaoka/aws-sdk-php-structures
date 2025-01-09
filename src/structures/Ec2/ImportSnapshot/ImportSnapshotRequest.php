<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClientData $ClientData
 * @property string $ClientToken
 * @property string $Description
 * @property Shapes\SnapshotDiskContainer $DiskContainer
 * @property bool $DryRun
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $RoleName
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class ImportSnapshotRequest extends Request
{
    /**
     * @param array{
     *     ClientData?: Shapes\ClientData,
     *     ClientToken?: string,
     *     Description?: string,
     *     DiskContainer?: Shapes\SnapshotDiskContainer,
     *     DryRun?: bool,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     RoleName?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
