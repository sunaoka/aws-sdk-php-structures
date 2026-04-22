<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property 'success'|'error'|null $status
 */
class HarnessToolResultBlockStart extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     status?: 'success'|'error'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
