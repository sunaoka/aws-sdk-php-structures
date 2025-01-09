<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstanceGroupConfig> $InstanceGroups
 * @property string $JobFlowId
 */
class AddInstanceGroupsRequest extends Request
{
    /**
     * @param array{
     *     InstanceGroups: list<Shapes\InstanceGroupConfig>,
     *     JobFlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
