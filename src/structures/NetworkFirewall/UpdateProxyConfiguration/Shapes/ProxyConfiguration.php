<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $DeleteTime
 * @property list<ProxyConfigRuleGroup>|null $RuleGroups
 * @property ProxyConfigDefaultRulePhaseActionsRequest|null $DefaultRulePhaseActions
 * @property list<Tag>|null $Tags
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     Description?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteTime?: \Aws\Api\DateTimeResult|null,
     *     RuleGroups?: list<ProxyConfigRuleGroup>|null,
     *     DefaultRulePhaseActions?: ProxyConfigDefaultRulePhaseActionsRequest|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
