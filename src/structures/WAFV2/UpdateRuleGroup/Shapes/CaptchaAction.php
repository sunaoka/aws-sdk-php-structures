<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomRequestHandling $CustomRequestHandling
 */
class CaptchaAction extends Shape
{
    /**
     * @param array{CustomRequestHandling?: CustomRequestHandling} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
