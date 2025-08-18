<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property array<string, ParameterDetail>|null $parameters
 * @property 'ENABLED'|'DISABLED'|null $requireConfirmation
 */
class FunctionShape extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     parameters?: array<string, ParameterDetail>|null,
     *     requireConfirmation?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
