<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinition $static
 * @property TemplateLinkedPolicyDefinition $templateLinked
 */
class PolicyDefinition extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinition,
     *     templateLinked?: TemplateLinkedPolicyDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
