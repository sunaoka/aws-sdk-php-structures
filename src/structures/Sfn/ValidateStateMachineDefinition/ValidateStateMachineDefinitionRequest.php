<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property 'STANDARD'|'EXPRESS'|null $type
 * @property 'ERROR'|'WARNING'|null $severity
 * @property int<0, 100>|null $maxResults
 */
class ValidateStateMachineDefinitionRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     type?: 'STANDARD'|'EXPRESS'|null,
     *     severity?: 'ERROR'|'WARNING'|null,
     *     maxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
