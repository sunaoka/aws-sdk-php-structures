<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCpuOptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceId
 * @property int|null $CoreCount
 * @property int|null $ThreadsPerCore
 * @property 'enabled'|'disabled'|null $NestedVirtualization
 */
class ModifyInstanceCpuOptionsResponse extends Response
{
}
