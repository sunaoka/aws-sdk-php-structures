<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCpuOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int|null $CoreCount
 * @property int|null $ThreadsPerCore
 * @property 'enabled'|'disabled'|null $NestedVirtualization
 * @property bool|null $DryRun
 */
class ModifyInstanceCpuOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     CoreCount?: int|null,
     *     ThreadsPerCore?: int|null,
     *     NestedVirtualization?: 'enabled'|'disabled'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
