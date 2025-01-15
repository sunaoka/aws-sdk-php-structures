<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinitionDetail|null $static
 * @property TemplateLinkedPolicyDefinitionDetail|null $templateLinked
 */
class PolicyDefinitionDetail extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinitionDetail|null,
     *     templateLinked?: TemplateLinkedPolicyDefinitionDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
