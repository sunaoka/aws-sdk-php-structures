<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyRuleGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProxyRuleGroupName
 * @property string|null $Description
 * @property Shapes\ProxyRulesByRequestPhase|null $Rules
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProxyRuleGroupRequest extends Request
{
    /**
     * @param array{
     *     ProxyRuleGroupName: string,
     *     Description?: string|null,
     *     Rules?: Shapes\ProxyRulesByRequestPhase|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
