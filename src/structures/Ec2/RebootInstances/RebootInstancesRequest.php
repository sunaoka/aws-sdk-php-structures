<?php

namespace Sunaoka\Aws\Structures\Ec2\RebootInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property bool $DryRun
 */
class RebootInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
