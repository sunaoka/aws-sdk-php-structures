<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomRequestHandling|null $CustomRequestHandling
 */
class ChallengeAction extends Shape
{
    /**
     * @param array{CustomRequestHandling?: CustomRequestHandling|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
