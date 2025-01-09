<?php

namespace Sunaoka\Aws\Structures\Ec2\StopInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property bool $Hibernate
 * @property bool $DryRun
 * @property bool $Force
 */
class StopInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     Hibernate?: bool,
     *     DryRun?: bool,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
