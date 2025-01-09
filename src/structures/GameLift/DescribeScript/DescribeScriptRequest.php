<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeScript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScriptId
 */
class DescribeScriptRequest extends Request
{
    /**
     * @param array{ScriptId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
