<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScriptId
 */
class DeleteScriptRequest extends Request
{
    /**
     * @param array{ScriptId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
