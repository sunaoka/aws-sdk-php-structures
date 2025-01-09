<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateRulesOfIpGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property list<Shapes\IpRuleItem> $UserRules
 */
class UpdateRulesOfIpGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     UserRules: list<Shapes\IpRuleItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
