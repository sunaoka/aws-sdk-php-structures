<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $definition
 * @property 'STANDARD'|'EXPRESS' $type
 * @property 'ERROR'|'WARNING' $severity
 * @property int $maxResults
 */
class ValidateStateMachineDefinitionRequest extends Request
{
    /**
     * @param array{
     *     definition: string,
     *     type?: 'STANDARD'|'EXPRESS',
     *     severity?: 'ERROR'|'WARNING',
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
