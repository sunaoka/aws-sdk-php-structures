<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySecurityGroupRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property list<Shapes\SecurityGroupRuleUpdate> $SecurityGroupRules
 * @property bool $DryRun
 */
class ModifySecurityGroupRulesRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     SecurityGroupRules: list<Shapes\SecurityGroupRuleUpdate>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
