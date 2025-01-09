<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinitionItem $static
 * @property TemplateLinkedPolicyDefinitionItem $templateLinked
 */
class PolicyDefinitionItem extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinitionItem,
     *     templateLinked?: TemplateLinkedPolicyDefinitionItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
