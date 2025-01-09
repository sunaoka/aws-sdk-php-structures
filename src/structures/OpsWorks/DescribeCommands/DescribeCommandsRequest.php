<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeCommands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeploymentId
 * @property string $InstanceId
 * @property list<string> $CommandIds
 */
class DescribeCommandsRequest extends Request
{
    /**
     * @param array{
     *     DeploymentId?: string,
     *     InstanceId?: string,
     *     CommandIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
