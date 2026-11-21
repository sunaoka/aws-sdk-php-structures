<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationalUnits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $organizationalUnitId
 * @property 'All'|'None' $autoEnrollMemberAccounts
 * @property 'AnyAllowed'|'NoneAllowed' $organizationRuleMode
 * @property OrganizationRuleModeSource $organizationRuleModeSource
 */
class OrganizationalUnitInfo extends Shape
{
    /**
     * @param array{
     *     organizationalUnitId: string,
     *     autoEnrollMemberAccounts: 'All'|'None',
     *     organizationRuleMode: 'AnyAllowed'|'NoneAllowed',
     *     organizationRuleModeSource: OrganizationRuleModeSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
