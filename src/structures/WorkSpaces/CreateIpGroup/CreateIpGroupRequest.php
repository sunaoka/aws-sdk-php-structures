<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateIpGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $GroupDesc
 * @property list<Shapes\IpRuleItem>|null $UserRules
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateIpGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     GroupDesc?: string|null,
     *     UserRules?: list<Shapes\IpRuleItem>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
