<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAIL_CLOSE'|'FAIL_OPEN'|null $failureMode
 */
class WafConfiguration extends Shape
{
    /**
     * @param array{failureMode?: 'FAIL_CLOSE'|'FAIL_OPEN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
