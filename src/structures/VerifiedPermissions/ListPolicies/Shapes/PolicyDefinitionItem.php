<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinitionItem|null $static
 * @property TemplateLinkedPolicyDefinitionItem|null $templateLinked
 */
class PolicyDefinitionItem extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinitionItem|null,
     *     templateLinked?: TemplateLinkedPolicyDefinitionItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
