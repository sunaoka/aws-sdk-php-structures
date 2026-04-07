<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED' $status
 * @property string|null $error
 */
class MouseScrollResult extends Shape
{
    /**
     * @param array{
     *     status: 'SUCCESS'|'FAILED',
     *     error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
