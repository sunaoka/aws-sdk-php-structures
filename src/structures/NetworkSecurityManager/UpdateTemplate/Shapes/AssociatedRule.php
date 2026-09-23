<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleArn
 */
class AssociatedRule extends Shape
{
    /**
     * @param array{ruleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
