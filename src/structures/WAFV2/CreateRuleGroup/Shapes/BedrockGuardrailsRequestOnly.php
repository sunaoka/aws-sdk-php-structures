<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 */
class BedrockGuardrailsRequestOnly extends Shape
{
    /**
     * @param array{RoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
