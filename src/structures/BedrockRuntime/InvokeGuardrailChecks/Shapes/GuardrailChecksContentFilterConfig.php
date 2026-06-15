<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksContentFilterCategoryConfig> $categories
 */
class GuardrailChecksContentFilterConfig extends Shape
{
    /**
     * @param array{categories: list<GuardrailChecksContentFilterCategoryConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
