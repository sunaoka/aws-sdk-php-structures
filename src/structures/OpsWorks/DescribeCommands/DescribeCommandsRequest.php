<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DeploymentId
 * @property string|null $InstanceId
 * @property list<string>|null $CommandIds
 */
class DescribeCommandsRequest extends Request
{
    /**
     * @param array{
     *     DeploymentId?: string|null,
     *     InstanceId?: string|null,
     *     CommandIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
