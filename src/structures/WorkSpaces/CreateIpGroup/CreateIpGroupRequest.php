<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateIpGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $GroupDesc
 * @property list<Shapes\IpRuleItem> $UserRules
 * @property list<Shapes\Tag> $Tags
 */
class CreateIpGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     GroupDesc?: string,
     *     UserRules?: list<Shapes\IpRuleItem>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
