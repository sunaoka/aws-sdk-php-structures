<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyTemplateId
 * @property EntityIdentifier|null $principal
 * @property EntityIdentifier|null $resource
 */
class TemplateLinkedPolicyDefinitionItem extends Shape
{
    /**
     * @param array{
     *     policyTemplateId: string,
     *     principal?: EntityIdentifier|null,
     *     resource?: EntityIdentifier|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
