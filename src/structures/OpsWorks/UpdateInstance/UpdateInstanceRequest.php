<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string>|null $LayerIds
 * @property string|null $InstanceType
 * @property 'load'|'timer'|null $AutoScalingType
 * @property string|null $Hostname
 * @property string|null $Os
 * @property string|null $AmiId
 * @property string|null $SshKeyName
 * @property 'x86_64'|'i386'|null $Architecture
 * @property bool|null $InstallUpdatesOnBoot
 * @property bool|null $EbsOptimized
 * @property string|null $AgentVersion
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LayerIds?: list<string>|null,
     *     InstanceType?: string|null,
     *     AutoScalingType?: 'load'|'timer'|null,
     *     Hostname?: string|null,
     *     Os?: string|null,
     *     AmiId?: string|null,
     *     SshKeyName?: string|null,
     *     Architecture?: 'x86_64'|'i386'|null,
     *     InstallUpdatesOnBoot?: bool|null,
     *     EbsOptimized?: bool|null,
     *     AgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
