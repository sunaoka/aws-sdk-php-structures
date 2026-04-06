<?php

namespace Sunaoka\Aws\Structures\Ec2\StopInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property bool|null $Hibernate
 * @property bool|null $DryRun
 * @property bool|null $Force
 */
class StopInstancesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     Hibernate?: bool|null,
     *     DryRun?: bool|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
