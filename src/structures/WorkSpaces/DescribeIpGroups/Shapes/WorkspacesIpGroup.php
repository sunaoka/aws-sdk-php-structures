<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeIpGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 * @property string $groupName
 * @property string $groupDesc
 * @property list<IpRuleItem> $userRules
 */
class WorkspacesIpGroup extends Shape
{
    /**
     * @param array{
     *     groupId?: string,
     *     groupName?: string,
     *     groupDesc?: string,
     *     userRules?: list<IpRuleItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
