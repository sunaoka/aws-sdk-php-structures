<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string|null $FileSystemId
 * @property string|null $StorageVirtualMachineId
 * @property string $Name
 * @property 'COPY_ALL_SOURCE_SNAPSHOTS'|'COPY_LATEST_SOURCE_SNAPSHOT'|'NO_CREATE_SNAPSHOT_ON_SOURCE'|null $SnapshotCopyMode
 * @property list<Shapes\SnapmirrorPolicyRetentionRule>|null $RetentionRules
 * @property string|null $TransferSchedule
 * @property bool|null $NetworkCompressionEnabled
 * @property int<0, max>|null $ThrottleInKbps
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapmirrorPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     Name: string,
     *     SnapshotCopyMode?: 'COPY_ALL_SOURCE_SNAPSHOTS'|'COPY_LATEST_SOURCE_SNAPSHOT'|'NO_CREATE_SNAPSHOT_ON_SOURCE'|null,
     *     RetentionRules?: list<Shapes\SnapmirrorPolicyRetentionRule>|null,
     *     TransferSchedule?: string|null,
     *     NetworkCompressionEnabled?: bool|null,
     *     ThrottleInKbps?: int<0, max>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
