<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityReference $principal
 * @property EntityReference $resource
 * @property 'STATIC'|'TEMPLATE_LINKED' $policyType
 * @property string $policyTemplateId
 */
class PolicyFilter extends Shape
{
    /**
     * @param array{
     *     principal?: EntityReference,
     *     resource?: EntityReference,
     *     policyType?: 'STATIC'|'TEMPLATE_LINKED',
     *     policyTemplateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
