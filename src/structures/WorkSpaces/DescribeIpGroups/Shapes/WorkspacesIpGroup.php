<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeIpGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupId
 * @property string|null $groupName
 * @property string|null $groupDesc
 * @property list<IpRuleItem>|null $userRules
 */
class WorkspacesIpGroup extends Shape
{
    /**
     * @param array{
     *     groupId?: string|null,
     *     groupName?: string|null,
     *     groupDesc?: string|null,
     *     userRules?: list<IpRuleItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
