<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property bool|null $Force
 * @property bool|null $SkipOsShutdown
 * @property bool|null $DryRun
 */
class TerminateInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     Force?: bool|null,
     *     SkipOsShutdown?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
