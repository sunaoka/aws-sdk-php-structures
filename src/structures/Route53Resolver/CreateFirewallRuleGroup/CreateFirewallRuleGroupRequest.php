<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFirewallRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
