<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $LayerIds
 * @property string $InstanceType
 * @property 'load'|'timer' $AutoScalingType
 * @property string $Hostname
 * @property string $Os
 * @property string $AmiId
 * @property string $SshKeyName
 * @property 'x86_64'|'i386' $Architecture
 * @property bool $InstallUpdatesOnBoot
 * @property bool $EbsOptimized
 * @property string $AgentVersion
 */
class UpdateInstanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LayerIds?: list<string>,
     *     InstanceType?: string,
     *     AutoScalingType?: 'load'|'timer',
     *     Hostname?: string,
     *     Os?: string,
     *     AmiId?: string,
     *     SshKeyName?: string,
     *     Architecture?: 'x86_64'|'i386',
     *     InstallUpdatesOnBoot?: bool,
     *     EbsOptimized?: bool,
     *     AgentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
