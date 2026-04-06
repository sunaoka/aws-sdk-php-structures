<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolUseId
 * @property string|null $type
 * @property 'success'|'error'|null $status
 */
class ToolResultBlockStart extends Shape
{
    /**
     * @param array{
     *     toolUseId: string,
     *     type?: string|null,
     *     status?: 'success'|'error'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
