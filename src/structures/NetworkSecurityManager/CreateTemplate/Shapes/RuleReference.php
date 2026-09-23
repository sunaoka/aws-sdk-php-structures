<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleIdentifier
 */
class RuleReference extends Shape
{
    /**
     * @param array{ruleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
