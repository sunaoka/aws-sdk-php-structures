<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCpuOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int $CoreCount
 * @property int $ThreadsPerCore
 * @property bool|null $DryRun
 */
class ModifyInstanceCpuOptionsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     CoreCount: int,
     *     ThreadsPerCore: int,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
