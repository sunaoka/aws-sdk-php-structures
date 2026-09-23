<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateArn
 * @property string|null $ruleArn
 */
class AssociatedTemplateOrRule extends Shape
{
    /**
     * @param array{
     *     templateArn?: string|null,
     *     ruleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
