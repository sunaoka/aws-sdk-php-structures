<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyTemplateId
 * @property EntityIdentifier $principal
 * @property EntityIdentifier $resource
 */
class TemplateLinkedPolicyDefinitionItem extends Shape
{
    /**
     * @param array{
     *     policyTemplateId: string,
     *     principal?: EntityIdentifier,
     *     resource?: EntityIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
