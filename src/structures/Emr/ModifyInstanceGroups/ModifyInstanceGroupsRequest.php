<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property list<Shapes\InstanceGroupModifyConfig> $InstanceGroups
 */
class ModifyInstanceGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId?: string,
     *     InstanceGroups?: list<Shapes\InstanceGroupModifyConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
