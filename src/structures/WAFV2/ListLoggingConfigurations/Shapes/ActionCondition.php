<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'BLOCK'|'COUNT'|'CAPTCHA'|'CHALLENGE'|'EXCLUDED_AS_COUNT' $Action
 */
class ActionCondition extends Shape
{
    /**
     * @param array{Action: 'ALLOW'|'BLOCK'|'COUNT'|'CAPTCHA'|'CHALLENGE'|'EXCLUDED_AS_COUNT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
