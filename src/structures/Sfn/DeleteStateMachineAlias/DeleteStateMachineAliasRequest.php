<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteStateMachineAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineAliasArn
 */
class DeleteStateMachineAliasRequest extends Request
{
    /**
     * @param array{stateMachineAliasArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
