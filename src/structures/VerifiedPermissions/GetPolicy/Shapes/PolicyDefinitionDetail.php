<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StaticPolicyDefinitionDetail $static
 * @property TemplateLinkedPolicyDefinitionDetail $templateLinked
 */
class PolicyDefinitionDetail extends Shape
{
    /**
     * @param array{
     *     static?: StaticPolicyDefinitionDetail,
     *     templateLinked?: TemplateLinkedPolicyDefinitionDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
