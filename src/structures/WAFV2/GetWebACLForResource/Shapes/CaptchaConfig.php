<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImmunityTimeProperty|null $ImmunityTimeProperty
 */
class CaptchaConfig extends Shape
{
    /**
     * @param array{ImmunityTimeProperty?: ImmunityTimeProperty|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
