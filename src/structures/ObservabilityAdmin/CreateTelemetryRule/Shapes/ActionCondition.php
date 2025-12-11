<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'BLOCK'|'COUNT'|'CAPTCHA'|'CHALLENGE'|'EXCLUDED_AS_COUNT'|null $Action
 */
class ActionCondition extends Shape
{
    /**
     * @param array{Action?: 'ALLOW'|'BLOCK'|'COUNT'|'CAPTCHA'|'CHALLENGE'|'EXCLUDED_AS_COUNT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
