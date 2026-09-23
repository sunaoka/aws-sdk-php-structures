<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateIdentifier
 * @property string|null $ruleIdentifier
 */
class TemplateOrRuleReference extends Shape
{
    /**
     * @param array{
     *     templateIdentifier?: string|null,
     *     ruleIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
