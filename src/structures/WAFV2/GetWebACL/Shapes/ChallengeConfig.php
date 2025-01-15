<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImmunityTimeProperty|null $ImmunityTimeProperty
 */
class ChallengeConfig extends Shape
{
    /**
     * @param array{ImmunityTimeProperty?: ImmunityTimeProperty|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
