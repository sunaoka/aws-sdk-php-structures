<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPIRE' $type
 */
class LifecyclePolicyRuleAction extends Shape
{
    /**
     * @param array{type?: 'EXPIRE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
