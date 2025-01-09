<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImmunityTimeProperty $ImmunityTimeProperty
 */
class ChallengeConfig extends Shape
{
    /**
     * @param array{ImmunityTimeProperty?: ImmunityTimeProperty} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
