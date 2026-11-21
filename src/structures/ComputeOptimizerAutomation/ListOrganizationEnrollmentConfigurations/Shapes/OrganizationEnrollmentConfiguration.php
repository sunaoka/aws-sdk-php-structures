<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationEnrollmentConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetId
 * @property 'Account'|'OrganizationalUnit' $targetType
 * @property 'AnyAllowed'|'NoneAllowed'|null $organizationRuleMode
 */
class OrganizationEnrollmentConfiguration extends Shape
{
    /**
     * @param array{
     *     targetId: string,
     *     targetType: 'Account'|'OrganizationalUnit',
     *     organizationRuleMode?: 'AnyAllowed'|'NoneAllowed'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
