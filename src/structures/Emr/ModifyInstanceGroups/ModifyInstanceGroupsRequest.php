<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterId
 * @property list<Shapes\InstanceGroupModifyConfig>|null $InstanceGroups
 */
class ModifyInstanceGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId?: string|null,
     *     InstanceGroups?: list<Shapes\InstanceGroupModifyConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
