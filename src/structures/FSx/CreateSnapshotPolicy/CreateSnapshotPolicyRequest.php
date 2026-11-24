<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshotPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string|null $FileSystemId
 * @property string|null $StorageVirtualMachineId
 * @property string $Name
 * @property bool|null $Enabled
 * @property list<Shapes\SnapshotPolicySchedule> $Schedules
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapshotPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileSystemId?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     Name: string,
     *     Enabled?: bool|null,
     *     Schedules: list<Shapes\SnapshotPolicySchedule>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
