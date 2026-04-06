<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputVariableNameOverride
 * @property string|null $sessionDataNamespace
 */
class ToolOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     outputVariableNameOverride?: string|null,
     *     sessionDataNamespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
