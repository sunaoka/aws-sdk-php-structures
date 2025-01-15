<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinition|null $static
 * @property TemplateLinkedPolicyDefinition|null $templateLinked
 */
class PolicyDefinition extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinition|null,
     *     templateLinked?: TemplateLinkedPolicyDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
