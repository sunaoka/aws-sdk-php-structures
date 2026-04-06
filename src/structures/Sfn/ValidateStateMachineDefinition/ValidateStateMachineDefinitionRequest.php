<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property 'STANDARD'|'EXPRESS'|null $type
 */
class ValidateStateMachineDefinitionRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     type?: 'STANDARD'|'EXPRESS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
