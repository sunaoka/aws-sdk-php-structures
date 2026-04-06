<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $name
 * @property array<string, ParameterDetail>|null $parameters
 * @property 'ENABLED'|'DISABLED'|null $requireConfirmation
 */
class FunctionShape extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     name: string,
     *     parameters?: array<string, ParameterDetail>|null,
     *     requireConfirmation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
