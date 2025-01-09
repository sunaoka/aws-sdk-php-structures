<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImmunityTimeProperty $ImmunityTimeProperty
 */
class CaptchaConfig extends Shape
{
    /**
     * @param array{ImmunityTimeProperty?: ImmunityTimeProperty} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
