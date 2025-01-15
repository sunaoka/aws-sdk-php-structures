<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityReference|null $principal
 * @property EntityReference|null $resource
 * @property 'STATIC'|'TEMPLATE_LINKED'|null $policyType
 * @property string|null $policyTemplateId
 */
class PolicyFilter extends Shape
{
    /**
     * @param array{
     *     principal?: EntityReference|null,
     *     resource?: EntityReference|null,
     *     policyType?: 'STATIC'|'TEMPLATE_LINKED'|null,
     *     policyTemplateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
